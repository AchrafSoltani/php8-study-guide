<?php

// characterisrics

echo PHP_INT_MIN . PHP_EOL;
echo PHP_INT_MAX . PHP_EOL;
echo PHP_INT_SIZE . PHP_EOL;

// expressions

$int_decimal = 10;
$int_octal = 010;
$int_hex = 0x2F;
$int_binary = 0B10;

// max value
$x = PHP_INT_MIN + 1;
echo gettype($x); // float

// casting
$y = (int)0.1; // or
$y = (integer)0.1;
$z = (int) 'test'; // 0
$z = (int) null; // 0

// redeable definition
$x = 200_000; // 200000
$x = "200_000"; // doesn't work, interpretted as a string