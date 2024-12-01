<?php

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    return true;
}


function getPrimes($n) {
    $primes = [];
    for ($i = 2; $i <= $n; $i++) {
        if (isPrime($i)) {
            $primes[] = $i; 
        }
    }
    return $primes;
}


$n = 11;
$result = getPrimes($n);
echo "Простые числа от 1 до $n: " . implode(', ', $result);
?>
