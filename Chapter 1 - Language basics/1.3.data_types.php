<?php

declare(strict_types=1);

# 4 Scalar types
    # Bool - true / false
    # Int - 1, 2, 0, -5
    # Float 1.6, 8.2, -0,3
    # String
    $myvar = "hello world";
    echo gettype($myvar); // string

# 4 Compound types
    # Array
    $my_array = [1, 2, 0.3, "test"];
    print_r($my_array);
    # Object
    # Callable
    # Iterable

# 2 Special types
    # Resource
    # Null

// type hinting
function sum(int $a, int $b)
{
    return $a + $b;
}

echo sum(3, 5);

// if strict type is defined, then automatic conversion will throw an error



