<?php

// introduced in PHP8, almost same as switch
$statusCode = 200;

$message = match ($statusCode) {
    200, 300 => null,
    400 => 'not found',
    500 => 'server error',
    default => 'unknown status code',
};

// match is an expression
// no need to use a break
// default is required or all possible cases
// does strict comparison
// can have an expression on both sides, instead of 400 we can have x > 400
