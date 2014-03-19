<?php
/**
 * Euler Puzzle #3
 * Patrick Dunn (c) 2014
 */

/*
Problem 3

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/

/*
known issues:

so, I'm missing the mark here.
I had initially thought: "why don't I figure out all of the primes of the big number?
problem is, that doesn't actually get me the prime factors.
gosh, that's not even on target, really....

I'll need to think about this later
*/

$target = 600851475143;

$primes = [3,5,7,11,13,17,19,23,29];

$largest_prime = 29;

for ($i = $largest_prime; $i < ($target / 2)	; $i++) {
	if ($i % 2 != 0) {
		$is_prime = true;
		foreach ($primes AS $prime) {
			if ($i % $prime == 0) {
				$is_prime = false;
			}
		}
		if ($is_prime) {
			$largest_prime = $i;
			$primes[] = $largest_prime;
			echo PHP_EOL, $largest_prime, PHP_EOL;
		}
	}
}

echo PHP_EOL, $largest_prime, PHP_EOL, PHP_EOL;

?>
