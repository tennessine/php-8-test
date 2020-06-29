<?php

declare (strict_types = 1);

$f = function(int|string $v) {
	var_dump($v);
};

$f(100);
$f('abc');
$f(true);