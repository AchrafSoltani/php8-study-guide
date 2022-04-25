<?php

// implement \Serializable interface
// serialize()
// unserialize()

// or

// __sleep()
// before serialization
// return the array of the properties to serialize

// __wakeup()
// after serialization
// clean up

// __serialize
// return an array
// property => value
// will take precedence

// __unserialize(array $data)
//