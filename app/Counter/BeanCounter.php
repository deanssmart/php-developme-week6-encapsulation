<?php

// Create a class App\Counter\BeanCounter which has an addBean and howMany method. It should accept an App\Counter\Counter object in the constructor. When you call howMany it should return the number of times that addBean has been called. Make sure you use the Counter class rather than rewriting the increment logic.

namespace App\Counter;

class BeanCounter
{
    private $counter;
    
    public function __construct(Counter $counter) 
    {
        $this->counter = $counter;
    }

    public function addBean() : BeanCounter
    {
        $this->counter->increment();
        return $this;
    }

    public function howMany() : int
    {
        return $this->counter->count();
    }
}