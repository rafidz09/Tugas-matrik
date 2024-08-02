<?php

$num1 = 20;
$num2 = 25;
$num3 = 30;

$largest = $num1;
if ($num2 > $largest) {
    $largest = $num2;
}
if ($num3 > $largest) {
    $largest = $num3;
}
echo "Bilangan terbesar dari $num1, $num2, dan $num3 adalah $largest.";
?>