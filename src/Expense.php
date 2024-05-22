<?php

namespace Kata;

class Expense
{
    public $type;
    public $amount;

    function __construct($type, $amount)
    {
        $this->type = $type;
        $this->amount = $amount;
    }
}
