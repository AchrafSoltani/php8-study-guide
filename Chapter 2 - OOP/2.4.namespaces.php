<?php

// cannot create two classes with the same name in the same namespace or global namespace
// constants, functions, traits....

namespace namespacee;
const MYCONST = 0;

function test(){}

use \namespacee;

// use function \namespacee\test;

use const \namespacee\MYCONST;

// qualified name "namespace\class" vs fully qualified name \namespace\class

// with functions PHP will look in the local namespace then in the global namespace
// hence, built in functions can be overriden inside custom namespaces
// built-in functions can be used with the global namespace \ like \explode() // can improve speed


// import multiple classes from the same namespace
// use \namespace\classes\{class1, class2}
// or
// use \namespace\classes; new classes\class1();








