<?php

$x = 13.5;
$y = 12.3e3; // 12300
$z = 12_000.34; // with underscore like ints

$x = PHP_FLOAT_MAX + 1; // = INF / infinity

$x = floor((0.1 + 0.7) * 10); // do not trust floats in php
$y = 0.1 + 0.7;
echo $y . PHP_EOL; // 0.8
echo $x . PHP_EOL . PHP_EOL; // 7 not 8 ! converted into binary internally
// (0.1 + 0.7) * 10) => 7.999999999999999991118
// do not trust floats in php

// same with ceiling
$x = ceil((0.1 + 0.2) * 10);
$y = 0.1 + 0.7;
echo $y . PHP_EOL; // 0.8
echo $x; // 4 not 3 ! converted into binary internally
// (0.1 + 0.2) * 10) => 0.30000000000000000004


// Comparing floats
$x = 0.23;
$y = 1 - 0.77;

echo PHP_EOL;
var_dump($x === $y); // false

// explanation : https://floating-point-gui.de/basic/

// NAN = not a number
echo PHP_EOL;
echo log(-1); // NAN

echo is_nan($x);
echo is_infinite($y);