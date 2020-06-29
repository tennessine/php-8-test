<?php

declare (strict_types = 1);

$fib = function (int $i) use (&$fib) {
	return $i < 2 ? $i : $fib($i - 1) + $fib($i - 2);
};

$start = microtime(true);

var_dump($fib(40));

$end = microtime(true);
$total = $end - $start;

echo $total . ' times' . PHP_EOL;