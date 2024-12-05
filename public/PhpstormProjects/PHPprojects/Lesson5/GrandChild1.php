<?php

namespace Lesson5;

require_once 'ChildClass2.php';

class GrandChild1 extends ChildClass2
{
    private $grandChildProperty1;

    public function getGrandChildProperty1()
    {
        return $this->grandChildProperty1;
    }

    public function setGrandChildProperty1($value)
    {
        $this->grandChildProperty1 = $value;
    }

    public function divideProperties()
    {
        if ($this->childProperty2 == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return $this->property1 / $this->childProperty2;
    }

    public function addParentAndOwn()
    {
        return $this->property2 + $this->grandChildProperty1;
    }
}