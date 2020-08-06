<?php

// Create a class App\Counter\Counter which has an increment and count method. When you call count it should return the number of times that increment has been called.
namespace App\Counter;

class Counter
{

    private $counter = 0;

    public function count() : int 
    {
        return $this->counter;
    }

    public function increment() : Counter
    {
        $this->counter += 1;
        return $this;
    }
}
