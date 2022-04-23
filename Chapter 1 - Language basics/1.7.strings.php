<?php

$first = 'will';
$last = 'smith';

echo "Hello ${first}";

echo PHP_EOL;

echo $first[0]; // w
echo $first[-1]; // l
$first[8] = 'e';


echo PHP_EOL;
echo $first; // will    e
echo PHP_EOL;
echo PHP_EOL;

// Heredoc
$text = <<<TEXT
    $first
    hello world ' "
    dsadadDZ
    adasdasd
TEXT;

echo nl2br($text);
echo PHP_EOL;
echo PHP_EOL;

// Nowdoc
$text = <<<'TEXT'
    $first
    hello world ' "
    dsadadDZ
    adasdasd
TEXT;
echo nl2br($text);
echo PHP_EOL;