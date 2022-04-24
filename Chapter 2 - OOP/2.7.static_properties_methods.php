<?php

// static properties belong to the class and can be accessed from class instances
// but instance properties cannot be accessed from static methods (PHP8 => error, < 8 deprecated)
// this could be useful to count the number of created instances for example
// static methods can be created on class level to access static properties

// usecases
// counter
// cache values (heavy computation)
// singleton
// formatting helper
// factory pattern => TransactionFactory::make(25, 'new transaction 1'); // global state // bad


// Singleton
// private constructor
// static method getInstance()
// check if cached instance exists, otherwise create one

// static closures can be defined
// prevent access to $this from within a class definition


