<?php

class FlatArray implements IteratorAggregate
{
    private array $flatArray;

    public function __construct(array $originalArray)
    {
        $this->flatArray = [];
        $this->flattenArray($originalArray);
    }

    private function flattenArray(array $originalArray)
    {
        foreach ($originalArray as $original) {
            $this->flatArray = array_merge($this->flatArray, $original);
        }
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->flatArray);
    }


}