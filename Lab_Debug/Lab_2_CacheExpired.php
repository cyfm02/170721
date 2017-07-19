<?php

// 紅利點數應該是 6 吧?

$quantity = 10;
$price = 30;
$total = $price * $quantity;
$quantity = getLatestQuantity();
$bonus = $total * 0.01; // 每一百元換紅利點數一點
echo "Bouns: " . $bonus; 


function getLatestQuantity() {
    return 20;
}
?>