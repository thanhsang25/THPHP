<?php
function calculate_total($cart)
{
    $total = 0;
    foreach ($cart as $product) {
        $total += $product['quantity'] * $product['priceproduct'];
    }
    return $total;
}
?>
