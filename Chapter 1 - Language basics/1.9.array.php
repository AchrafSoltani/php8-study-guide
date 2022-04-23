<?php

$array1 = ['php', 'java', 'go'];

$key_arrays = [
    'php'   => '8',
    'java'  => '17',
    'go'    => '1.18'
];

echo array_key_exists('php', $key_arrays); // true

// length of an array
echo count($key_arrays);
echo PHP_EOL;

// append elements
$key_arrays[] = ['c++' => '10'];
array_push($key_arrays, ['c' => '12']);

// duplicate keys and overriding

$duplicates = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd']; // results in one element 1 => d
// true is cast to 1 and overriden
// '1' is cast to 1 and overrides 1 => b
// 1.8 is cast to 1 and overrides '1' => 'c'

// keys and increments
$keys = ['a', 'b', 50 => 'c', 'd', 'e'];
// d gets key 51
// e gets key 52

// remove an element
array_pop($keys); // removes last element
print_r($keys);
$keys = ['a', 'b', 50 => 'c', 'd', 'foo' => 'e'];
array_shift($keys); // removes first element, reindexes the array back to 0,1,2... (only numeric keys)
print_r($keys);
unset($keys[0]); // removes the first element, !!! doesn't reindex !!!
print_r($keys);

// unset keeps the index count
$test = [1,2,3];
unset($test[0], $test[1], $test[2]);
$test[] = 4;
print_r($test); // first key is 3

// difference between array_key_exists and isset
$arr = ['a' => 1, 'b' => null];
echo array_key_exists('a', $arr); // true, checks the key
echo isset($arr['b']); // false, check key and value

