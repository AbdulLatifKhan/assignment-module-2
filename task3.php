<?php

// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.

$veryOld = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 10; $i++) {
    if ($veryOld > 100) {
        break;
    }                
    echo $veryOld . " ";
        $old = $new;
        $new = $old + $veryOld;
        $veryOld = $old;
    }
