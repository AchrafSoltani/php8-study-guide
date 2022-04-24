<?php

spl_autoload_register(function ($class) {
    var_dump("Autoloader 1");
});

spl_autoload_register(function ($class) {
    var_dump("Autoloader 2");
}, prepend: true); // will be run before autoloader 1 because of the prepend param

spl_autoload_register(function ($class) {
    $path = __DIR__ . "/../" . str_repeat("\\", "/", $class);
    require_once $path;
});

// with composer

// composer dump-autoload

// Optimized version for PRODUCTION
// composer dump-autoload -o