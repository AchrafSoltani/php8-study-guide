<?php

// return
// ends the execution and return the value
// stops the function
// if used in the global scope, it stops the script


// declare
// declare - ticks (could be used for performance)
$x = 5;
$y = 2;
$z = $x*$y;

function onTick(){
    echo "tick<br/>";
}
register_tick_function("onTick");

declare(ticks=1); // number of ticks before triggering the declared function

// declare - encoding
// declare - strict_types (strict type checking)
// only applies to the file of definition
