<?php

hello();

function hello(){
    echo 'hello';
}

// functions are evaluated first so they can be defined anywhere

if(true){
    function hello2(){
        echo 'hello';
    }
}

// if the function is defined conditionally then the condition has to pass first
// calling the function before will result in an error

// function inside a function
function hi(){
    echo 'hi';
    function hoi(){
        echo 'hoi';
    }
}
// hi
hoi();
// hoi cannot be called if hi is not called

// return types
// type hints
function test(): int {
    return 1;
}
// error if strict types and type is different
function no_type(): void {

}
// nullable types
function nullable(): ?int {
    // return either int or null
}
// multiple return types (PHP8)
function multiple_return(): int|float {
    // return either int or null
}
// or mixed
// multiple return types (PHP8)
function multiple_mixed(): mixed {
    // return either int or null
}

// arguments and parameters
function sum(int|float $x, int|float $y = 2){ // x and y are parameters, y has a default argument
    return $x * $y;
}

echo sum(4.3, 5); // 4.3 and 5 are arguments

// argument by reference
function by_ref(int &$x){
    $x++;
}

// variadic functions (PHP8)
function multi_sum(int|float ...$numbers){
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
    // return array_sum($numbers);
}

$arr = [1,2,3,4];
echo multi_sum(...$arr);

// named arguments (PHP8)
function named($x, $y){
    return $x+$y;
}

echo named(y: 3, x:4);

// arguments unpacking
function sumsum($x, $y) { return $x+$y; }
$arr = ['x' => 1, 'y' => 2];
echo sumsum(...$arr); // array is unpacked and keys are used as parameter names