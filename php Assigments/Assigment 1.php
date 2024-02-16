<?php
$bill_amount = 5000;
$discount = 0;

if ($bill_amount >= 5000) {
    echo "Total bill of your cart". $bill_amount."<br>";
    $discount = $bill_amount * 10 / 100;
    echo "Congratulations! You got a discount of " . $discount . "<br>";
    echo "Your total bill after discount is " . ($bill_amount - $discount) . "<br>";
} else {
    echo "Your total bill is " . $bill_amount;
}
?>
