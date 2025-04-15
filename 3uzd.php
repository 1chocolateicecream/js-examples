<?php
$host = 'localhost';
$db = 'sql_store';
$user = 'newuser';
$pass = 'password';

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT customer_id, first_name, last_name FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>{$row['first_name']} {$row['last_name']}</li>";
    }
    echo "</ul>";
} else {
    echo "0 data found";
}

$conn->close();
?>
