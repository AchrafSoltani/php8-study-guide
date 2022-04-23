<?php

while(true){
    //
    if(false) {
        break 1; // break of 1 level of loops
        // break 2; // break of 2 level of loops
    }
    else{
        continue; // skip to next iteration
    }

}

// do while

// for

// foreach
$array = ['php', 'c++', 'java'];
foreach ($array as $key => $item) {
    // $item is parsed by value
}

// foreach by reference
$array = ['php', 'c++', 'java'];
foreach ($array as $key => &$item) {
    // $item can be changed
}

// $item will remain after the loop
// should unset