<?php

// print vs echo
$return = print('hello') . PHP_EOL;
var_dump($return); // 1, print has a return value
echo 'hello' . PHP_EOL  . PHP_EOL;

// by value vs by reference
$x = 1;
$y = $x;
$z = &$x;
$x = 3;
echo $y . PHP_EOL;
echo $z . PHP_EOL;

// comments

// double slashes
# dash
/*
 Multiline comment
 */