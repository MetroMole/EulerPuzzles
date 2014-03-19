<?php
/**
 * Euler Puzzle #1
 * Patrick Dunn (c) 2014
 */

/*
Problem 2

Each new term in the Fibonacci sequence is generated by adding the previous two terms.
By starting with 1 and 2, the first 10 terms will be:
1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

By considering the terms in the Fibonacci sequence whose values do not exceed
four million, find the sum of the even-valued terms.
*/

$target = 4000000;

$num1 = 1;
$num2 = 1;
$current = 1;
$sum = 0;

while ($current <= $target) {
	$current = $num1 + $num2;
	$num2 = $num1;
	$num1 = $current;

	if ($current % 2 == 0) {
		$sum += $current;
	}

}

echo PHP_EOL, $sum, PHP_EOL, PHP_EOL;

?>