<?php

declare(strict_types=1);

class Transaction
{
    private float $amount; // uninitialized(float), with no type hinting = null, can have default value = 15
    private string $description; // uninitialized(string)

    public function __construct(float $amount, string $description){
        $this->amount = $amount;
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        // called at the end of the script
    }
}

$transaction = new Transaction(100, 'test');

// stdClass

$str = '{"a":1,"b":2}';
$obj = json_decode($str);
var_dump($obj); // stdClass

$arr = [1,2,3];
$obj = (object)$arr;
var_dump($obj);
var_dump($obj->{1});

var_dump((object)1);
var_dump(((object)1)->scalar); // applies to all scalars: bool, int, floar, string
// (object) null => empty object