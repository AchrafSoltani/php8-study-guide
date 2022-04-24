<?php

// include results in a warning
// require results in an error (Fatal error)
// looks in the include_path, then in the current directory

// _once only once

// require
// require_once
// include
// include_once

// include evaluates the file
// if we want to save into a var without evaluation then use ob_start ob_get_clean()

ob_start();
include '1.18.functions.php';
$x = ob_get_clean();