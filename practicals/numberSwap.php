<?php
function swapNumbers($a, $b) {
    return [$b, $a];
}

$number1 = 5;
$number2 = 10;

echo "Before swapping: Number 1 = $number1, Number 2 = $number2<br>";

list($number1, $number2) = swapNumbers($number1, $number2);

echo "After swapping: Number 1 = $number1, Number 2 = $number2";

?>
