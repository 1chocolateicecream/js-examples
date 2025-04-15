<?php
$groupedOrders = [
    [
        'order_id' => 1,
        'customer' => 'Alise',
        'products' => ['Grāmata', 'Pildspalva'],
    ],
    [
        'order_id' => 2,
        'customer' => 'Bobs',
        'products' => ['Dators', 'Pelīte'],
    ],
    [
        'order_id' => 3,
        'customer' => 'Čārlijs',
        'products' => ['Kafijas automāts'],
    ],
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список заказов</title>
</head>
<body>
    <h1>Группированные заказы</h1>
    <ul>
        <?php foreach ($groupedOrders as $order): ?>
            <li>
                <strong>Заказ №<?= $order['order_id'] ?> (<?= $order['customer'] ?>)</strong>
                <ul>
                    <?php foreach ($order['products'] as $product): ?>
                        <li><?= $product ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
