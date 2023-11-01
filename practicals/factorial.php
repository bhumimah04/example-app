<?php
function calculateFactorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers";
    }
    
    $factorial = 1;

    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$number = 5; // Change this to the number for which you want to calculate the factorial
$factorialResult = calculateFactorial($number);

echo "The factorial of $number is: $factorialResult";
?>

