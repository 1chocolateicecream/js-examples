<?php
$groupedOrders = [];

foreach ($orders as $order) {
    $id = $order['order_id'];

    // Проверяем, если такого заказа ещё нет — добавим
    if (!isset($groupedOrders[$id])) {
        $groupedOrders[$id] = [
            'order_id' => $id,
            'customer' => $order['customer'],
            'products' => []
        ];
    }

    $groupedOrders[$id]['products'][] = $order['product'];
}

$groupedOrders = array_values($groupedOrders);
?>
