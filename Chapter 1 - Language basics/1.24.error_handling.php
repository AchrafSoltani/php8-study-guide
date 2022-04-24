<?php

// trigger error
trigger_error('Example error', E_USER_WARNING); // can't trigger E_WARNING manually

function errorHandler(int $type, string $message, ?string $file = null, ?int $line=null){
    // do something with the error log
    // exit or return 0|1;
}

set_error_handler('errorHandler', E_ALL); // Overrides error_reporting

restore_error_handler(); // default error handler