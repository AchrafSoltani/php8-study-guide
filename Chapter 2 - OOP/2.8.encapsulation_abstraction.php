<?php

// ENCAPSULATION

// encapsulation bundles the data and methods within one unit like a class
// hides internal representation or state
// protects the integrity of that object

// getters and setters break the encapsulation
// but help with method changes
// Data transfer objects DTO

// can still be accessed with ReflectionProperty
$rp = new ReflectionProperty('class', 'property');
$rp->setAccessible(true);
$rp->setValue('object', 'value');



// ABSTRACTION

// hide inner implementation
// $transaction->process(); we don't care about the details of the implementation of the process method

// BONUS
// objects of the same type can access each other's private and protected properties


