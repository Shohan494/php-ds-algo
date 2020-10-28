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

    public function push($newItem) {

        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $newItem);
        } else {
            throw new OverflowException('Stack is full');
        }
    }
}