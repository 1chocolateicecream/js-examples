<?php
$orders = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    $conn = new mysqli('localhost', 'newuser', 'password', 'sql_store');

    $stmt = $conn->prepare("
        SELECT o.order_id, o.order_date
        FROM customers c
        JOIN orders o ON c.customer_id = o.customer_id
        WHERE c.first_name = ?
    ");
    $stmt->bind_param('s', $name);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="post">
    <label>Имя клиента: <input type="text" name="name" required></label>
    <button type="submit">Показать заказы</button>
</form>

<?php if (!empty($orders)): ?>
    <h2>Заказы клиента:</h2>
    <ul>
        <?php foreach ($orders as $order): ?>
            <li>Заказ №<?= $order['order_id'] ?> от <?= $order['order_date'] ?></li>
        <?php endforeach; ?>
    </ul>
<?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <p>Заказов не найдено.</p>
<?php endif; ?>
