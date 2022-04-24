<?php

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

print_r(array_chunk($items, 2)); // split into array of 2 elements array
print_r(array_chunk($items, 2, true)); // split into array of 2 elements array and preserves keys

$arr1 = ['a','b','c'];  // keys
$arr2 = [1,2,3];        // values
print_r(array_combine($arr1, $arr2)); // make key => value array
// PHP < 8 => warning and returns false
// PHP 8 => fatal error

$array = [1,2,3,4,5,6,7,8,9,10];
$even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);
// callback as arrow, returns even
$even = array_values($even); // reindex
// [2,4,6,8,10]

$array = [1,2,3,false,5,0,7,[],9,0.0];
$even = array_filter($array);
// removes falsy elements like 0, false, empty array, 0.0 etc

array_keys($array); // returns an array of keys
array_keys($array, 10); // returns an array of keys with value 10 // loose comparison
array_keys($array, 10, true); // returns an array of keys with value 10 // strict comparison

$array = [1,2,3];
array_map(fn($element) => $element * 2, $array); // applies a callback to array elements
// will preserve keys if 1 array is passed

$array = [1,2,3];
$array2 = [4,5,6];
array_map(fn($element1, $element2) => $element1 * $element2, $array, $array2);
// will reindex elements
// if the array do not have the same length, 0 will be added to fill the gap

array_merge($array, $array2); // merges two arrays
// if arrays have similar keys, they will be overriden

// array reduce
$cart = [
    ['price' => 9.99, 'qty' => 1],
    ['price' => 29.99, 'qty' => 1],
    ['price' => 14, 'qty' => 2],
];

$total = array_reduce($cart, fn($sum, $item) => $sum = $item['price'] * $item['qty']);
// sum = 0 in the first iteration
echo $total;
$total = array_reduce($cart, fn($sum, $item) => $sum = $item['price'] * $item['qty'], 500);
// sum = 500 in the first iteration
echo $total;

// array search
$search = [1,2,3,4];
$key = array_search('3', $array, true); // true for strict comparison
// first result, case sensitive
// returns false if none is found
$is_found = in_array('3', $array, true); // return true if found

// array diff // returns elements not found in 2nd and later arrays
// array diff assoc // return elements not found based on key AND value
// array diff key // keys not found in other arrays

// SORTING
asort($array); // sort by values
ksort($array); // sort by keys
usort($array, fn($a, $b) => $a <=> $b); // with callback, order an element with the next one

// unpack an array
$array = [1,2,3,4];
list($a, $b, $c, $d) = $array; // or
[$a, $b, $c, $d] = $array;
[$a, , $c, $d] = $array; // skip 2nd element
$array = [1,2,[3,4]];
[$a, $b, [$c, $d]] = $array; // nested array elements





