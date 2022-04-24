<?php

$dir = scandir(__DIR__); // array of files in dir

mkdir('test', 777);
rmdir('test');

mkdir('test/subdir', recursive: true);
rmdir('test/subdir'); // removes subdir

file_exists('file.txt');
filesize('file.txt');


filesize('file.txt'); // 0
file_put_contents('file.txt', 'hello world');
filesize('file.txt'); // 0
clearstatcache(); // clears the cache
filesize('file.txt'); // 12


$file = fopen('file.txt', 'r'); // r: read
// $file is a resource type
// returns false + warning

while(($line = fgets($file)) !== false){ // read each line
    echo $line;
}
fclose($file);

while(($line = fgetcsv($file)) !== false){ // default separator is ,
    print_r($line);
}
fclose($file);

$content = file_get_contents('file.txt', offset: 3, length: 2);

file_put_contents('bar.txt', 'hello');
file_put_contents('bar.txt', 'world'); // overrides by default
file_put_contents('bar.txt', 'world', FILE_APPEND); // append to file

unlink('bar.txt');
copy('bar.txt', 'baz.txt'); // overrides file if exists
rename('bar.txt', 'baz.txt'); // overrides file if exists

pathinfo('file.txt');

