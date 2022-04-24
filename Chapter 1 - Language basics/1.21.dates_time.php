<?php

echo time(); // unix timestamp

echo date('m/d/Y g:ia');

echo date('m/d/Y g:ia', time());

date_default_timezone_set('UTC'); // change timezone

echo date_default_timezone_get(); // get default timezone
// prints UTC

$date = mktime(0, 0, 0, 1, 1, 2022); // make timestamp
echo date($date);

echo strtotime('2022-04-23'); // makes timestamp from string

$date = date('m/d/Y g:ia', time());

var_dump(date_parse($date));
var_dump(date_parse_from_format('m/d/Y', $date));







