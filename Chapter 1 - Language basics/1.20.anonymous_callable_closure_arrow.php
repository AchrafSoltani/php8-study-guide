<?php

// variable function

function sum(){
    return 1+2;
}

$x = 'sum';

echo $x(); // == sum(0)

if (is_callable($x)){
    // checks if callable
}

// anonymous functions

$sum = function (){
    return 1+2;
};

echo $sum();

// access external scope
$x = 1;
$sum = function () use ($x) {
    echo $x;
    return 1+2;
};

echo $sum();

// access external scope by reference
$x = 1;
$sum = function () use (&$x) {
    $x = 20;
    return 1+2;
};
echo $x; // 20
echo $sum();

// callable
$array = [1,2,3,4];
function multiply($element){
    return $element * 2;
}
$array2 = array_map('multiply', $array); // can be used with a closure or variable function

// callback and closure type hint

// Arrow functions (PHP7.4)
$array = [1,2,3,4];
$array2 = array_map(function($number){
    return $number * 2;
}, $array);
// arrow
$num = 2;
$array2 = array_map(fn($number) => $number * 2, $array);
$array2 = array_map(fn($number) => $number * $num, $array);
// arrow functions can access scope variables without 'use'
// single expression
// cannot modify outer scope variables
