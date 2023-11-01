<?php
function generateFibonacciSeries($n) {
    $fibonacci = [];

    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    if ($n >= 2) {
        $fibonacci[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$n = 10; // Change this to the number of Fibonacci numbers you want

$fibonacciSeries = generateFibonacciSeries($n);

foreach ($fibonacciSeries as $number) {
    echo $number . " ";
}
?>

