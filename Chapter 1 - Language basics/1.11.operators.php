<?php

// arithmetic (+ - * / % **)

// assignment (= += -+ *= /= %= **=)

// string (. .=)

// comparison (== === != <> !== < > <= >= <=> ?? ?:)

// != same as <>
// <=> combines <, = and >, returns 0 if x=y, -1 if x<y and 1 if x>y
// PHP 7.4 =>
$x = 0 == 'hello'; // 'hello is converted to int =0 then 0==0 is true
// PHP 8 =>
$y = 0 == 'hello'; // 0 is converted to string then '0' == 'hello' is false

$x = $y == true ? 'yes' : 'no';
$x = null;
$y = $x ?? 'hello'; // y = hello if x is null

// error (@)
// suppresses errors

// increment / decrement (++ --)
$x = 3;
echo $x++; // return 3
echo PHP_EOL;
echo ++$x; // return 5

$x = 'abc';
--$x; // no effect
++$x; // 'abd' lol

// logical (&& || ! and or xor)
$x = true and false; // true because = has higher precedence than 'and'
$x = true || false; // second part is never interpretted because the first is true
$x = false && true; // second part is never interpretted because the first is true

// bitwise (& | ^ ~ << >>)
// ^ xor
// ~ negation
// >> right shift => suppress from the right (/2 each time)
// << left shift => add 000 to the right (x2 each time)

// array (+ == === != <> !==)
// + on normal array: union on indexes
// + on associative arrays with unique keys: append
// similar keys do not override the elements in the first array
// == compares keys and values
// === compares keys, values, data types and order !
// same applies for <>, != and !==


// execution (``)
// executes shell commands if shell_exec is enabled

// type (instanceof)
// instance of a class

// nullsafe - PHP8 (?)

############################
## PRECENDENCE
############################

// associativity defines precedence when operators have the same priority
$x = $y = 5;
// is executed in the following order: $y = 5 then $x = $y (= has a right associativity)
$x = 5 / 2 * 10;
// is executed in the following order: 5/2 then *10 (left associativity)
$x = 5 < 3 > 10;
// doesn't work, non-associative
$x = true;
$y = false;
$z = $x && $y;  // $x && $y is executed first
$z = $x and $y; // $z = $x is executed first

// https://www.php.net/manual/en/language.operators.precedence.php