<?php

// assigned null
$x = null;
echo $x;
// undefined

echo $y; // undefined

// unset

unset($x);
echo $x;

// CASTING

$x = (int) null; // 0
$x = (float) null; // 0.0
$x = (bool) null; // false
$x = (string) null; // ''
$x = (array) null; // []
