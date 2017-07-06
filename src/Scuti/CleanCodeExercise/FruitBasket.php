<?php

namespace Scuti\CleanCodeExercise;

use Iterator;
use ArrayAccess;

class FruitBasket implements Iterator, ArrayAccess
{
    private $fruits;
    private $owner;
    private $index = 0;

    public function __construct($owner, $fruits)
    {
        $this->owner = $owner ? $owner : "";
        $this->fruits = $fruits;
    }

    public function current()
    {
        return $this->fruits[$this->index];
    }

    public function next()
    {
        ++$this->index;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        $valid = $this->fruits[$this->index] ? true : false;
        return $valid;
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function offsetExists($offset)
    {
        $fruitHasOffset = $this->fruits[$offset] ? $this->fruits[$offset] : null;
        return $fruitHasOffset;
    }

    public function offsetGet($offset)
    {
        return $this->fruits[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this[$offset]);
    }

    public function getOwner()
    {
        return $this->owner;
    }
}
