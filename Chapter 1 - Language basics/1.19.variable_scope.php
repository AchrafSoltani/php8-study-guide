<?php

$x = 5; // global scope, available in script and if included

function sum(){
    $x = 10; // local scope
}

function sum2(){
    // access the gloab lversion
    global $x;
    // or
    echo $GLOBALS['x'];
}

// static variable
function getValue(){
    static $value = null;
    if ($value === null){
        $value = longFunction();
    }
    return $value;
}

function longFunction(){
    sleep(2);
    return 10;
}

echo getValue(); // sleep only 2 second, result is saved
echo getValue();
echo getValue();