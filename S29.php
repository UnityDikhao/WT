<?php

$num = $fib_result = $sum_result = '';

function fibonacci($n) {
    $fib_series = array();
    $fib_series[0] = 0;
    $fib_series[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fib_series[$i] = $fib_series[$i - 1] + $fib_series[$i - 2];
    }
    return implode(", ", $fib_series);
}

function sum_of_digits($n) {
    $sum = 0;
    while ($n != 0) {
        $digit = $n % 10;
        $sum += $digit;
        $n = $n / 10;
    }
    return $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["num"]) && is_numeric($_POST["num"]) && $_POST["num"] >= 0) {
        $num = $_POST["num"];
       
        $fib_result = fibonacci($num);
        
        $sum_result = sum_of_digits($num);
    } else {
        echo "<p>Please enter a valid non-negative number.</p>";
    }
}

if ($fib_result !== '' && $sum_result !== '') {
    echo "<h2>Results:</h2>";
    echo "<p>Fibonacci Series: $fib_result</p>";
    echo "<p>Sum of Digits: $sum_result</p>";
}

?>
