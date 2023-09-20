<?php
// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

function FibonacciNum($n)
{

    $veryOld = 0;
    $old = 1;
    $new = 1;

    for ($i = 0; $i < $n; $i++) {
        echo $veryOld . " ";
        $old = $new;
        $new = $old + $veryOld;
        $veryOld = $old;
    }
}
FibonacciNum(15);
