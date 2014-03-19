<?php
/**
 * Euler Puzzle #1
 * Patrick Dunn (c) 2014
 */

/*
Problem 1

If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
The sum of these multiples is 23.
Find the sum of all the multiples of 3 or 5 below 1000.

*/

$upper_bound = 1000;
$five = 5;
$three = 3;

$sum = 0;

for ($i = 0; $i < 1000; $i++) {
  if ($i % 5 == 0 || $i % 3 == 0) {
    $sum += $i;
  } //else if ($i % 5 == 0) {
    
    //  } else if ($i % 3 == 0)
}

echo PHP_EOL, $sum, $PHP_EOL;

?>
