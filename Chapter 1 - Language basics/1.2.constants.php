<?php

// CONSTANTS

define('MY_CONTANT', 'cont value'); // runtime

echo MY_CONTANT . PHP_EOL;

const MY_CONTANT2 = 'cont value'; // compile time
if(true){
    //const MY_CONTANT3 = 'cont value'; // wont work
    define('MY_CONTANT4', 'cont value'); // works!
}

// PREDEFINED CONSTANTS
echo PHP_INT_MAX;

// VARIABLE VARIABLES

$foo = 'bar';
$$foo = 'baz'; // = $bar = 'baz'

echo $bar;
echo "${bar}"; // or
echo "{$bar}"; // same thing
