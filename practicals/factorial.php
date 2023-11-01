<?php
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 5; // Change this to the number for which you want to calculate the factorial
$result = factorial($number);
echo "The factorial of $number is $result";
?>
