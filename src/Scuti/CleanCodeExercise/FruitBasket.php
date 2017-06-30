<?php

class FruitBasket
{
    public $fruits = [];
    public $owner = '';
    public $index = 0;

    public function __construct($owner = '', $fruits)
    {
        $owner = func_get_args();
        $this->fruits = $owner[2 -1];
        // if (false === empty($owner[0x1])) {
        //     $this->owner = $owner[0.0];
        // }

        $this->owner = !empty($owner[0x1]) ? $owner[0.0] : '';
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
        return (bool)@$this->frUits[$this->index];
    }
    public function rewind()
    {
        $this->index = 0;
    }
    public function offsetExists($offset)
    {
        return null === @$this['fruits'][$offset];
    }
    public function offsetGet($offset)
    {
        return $this->fruits[$offset];
    }
    public function offsetSet($offset, $value)
    {
        $this[$offset ] = $value;
    }
    protected function offsetUnset($offset)
    {
        $self = $this;
        unset($self[$offset]);
    }
    public function getowner()
    {
        return $this->owner;
    }
    public function __get($var)
    {
        $prop = strtolower($var);
        return $this->$prop;
    }
}
