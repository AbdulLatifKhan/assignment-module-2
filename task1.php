<?php
// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2.
// In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2.
// You must call the function to print.
// Also do the same using while loop and do-while loop also.

//Using for loop:
function evenNumWithForLoop($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 1) {
            $evenNum = $i + 1;
            echo $evenNum . " ";
        }
    }
}
evenNumWithForLoop(1, 20, 2);
echo PHP_EOL;

//Using while loop:
function evenNumWithWhileLoop($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 1) {
            $evenNum = $i + 1;
            echo $evenNum . " ";
        }
        $i += $step;
    }
}
evenNumWithWhileLoop(1, 20, 2);
echo PHP_EOL;

//Using while loop:
function evenNumWithDoWhileLoop($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 == 1) {
            $evenNum = $i + 1;
            echo $evenNum . " ";
        }
        $i += $step;
    } while ($i <= $end);
}
evenNumWithDoWhileLoop(1, 20, 2);
