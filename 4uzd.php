<?php
$conn = new mysqli('localhost', 'newuser', 'password', 'sql_store');

$sql = "
    SELECT c.customer_id, c.first_name, c.last_name, o.order_id
    FROM customers c
    LEFT JOIN orders o ON c.customer_id = o.customer_id
    ORDER BY c.customer_id, o.order_id
";

$result = $conn->query($sql);

$customers = [];

while ($row = $result->fetch_assoc()) {
    $id = $row['customer_id'];
    if (!isset($customers[$id])) {
        $customers[$id] = [
            'name' => $row['first_name'] . ' ' . $row['last_name'],
            'orders' => []
        ];
    }

    if ($row['order_id']) {
        $customers[$id]['orders'][] = $row['order_id'];
    }
}

echo "<ul>";
foreach ($customers as $customer) {
    echo "<li>{$customer['name']}";
    if (!empty($customer['orders'])) {
        echo "<ul>";
        foreach ($customer['orders'] as $orderId) {
            echo "<li>Sutijums №$orderId</li>";
        }
        echo "</ul>";
    }
    echo "</li>";
}
echo "</ul>";

$conn->close();
?>
