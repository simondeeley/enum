<?php

abstract class AbstractEnum implements Enum
{
    protected $types = [];
    
    final public function __construct($value): void
    {
        if (false === in_array($this->__allowed_values, $arg)) {
           throw new InvalidArgumentException();
        }
        
        $this->value = $value;
     }
 }
           
