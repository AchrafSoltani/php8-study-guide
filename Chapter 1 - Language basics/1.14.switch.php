<?php

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break; // if no break, it continues
    case "blue":
    case "lightblue": // combine conditions
        echo "Your favorite color is blue!";
        break;

    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

// loose comparison, it matches '1' and 1 equally

// swicth only runs once, if else runs as many blocks, so switch is slightly faster