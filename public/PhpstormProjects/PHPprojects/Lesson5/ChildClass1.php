<?php

namespace Lesson5;

require_once 'Main.php';

final class ChildClass1 extends Main
{
    private $childProperty1;

    public function getChildProperty1()
    {
        return $this->childProperty1;
    }

    public function setChildProperty1($value)
    {
        $this->childProperty1 = $value;
    }

    public function addProperties()
    {
        return $this->property1 + $this->childProperty1;
    }

    public function powerOperation($base, $exponent)
    {
        return pow($base, $exponent);
    }
}