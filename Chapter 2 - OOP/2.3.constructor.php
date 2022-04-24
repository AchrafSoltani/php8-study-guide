<?php

// constructor property promotion (PHP8)
declare(strict_types=1);

class Transaction
{
    public $customer = null;

    public function __construct(
        private float $amount,
        private string $description = 'hello'
    )
    {
    }
}

// nullsafe operator
$transaction = new Transaction(100);
echo $transaction?->customer?->id; // no error, works with methods as well