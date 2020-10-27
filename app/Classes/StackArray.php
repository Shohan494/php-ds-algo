<?php

namespace App\Classes;
use App\StackInterface;

Class StackArray implements StackInterface
{
    private $limit;
    private $stack;

    public function __construct(int $limit = 20)
    {
        $this->limit = $limit; // WHAT IF THERE IS NO LIMIT
        $this->stack = [];
    }
}