<?php

namespace Lesson5;

require_once 'Main.php';

class ChildClass2 extends Main
{
    protected $childProperty2;

    public function getChildProperty2()
    {
        return $this->childProperty2;
    }

    public function setChildProperty2($value)
    {
        $this->childProperty2 = $value;
    }

    public function subtractProperties()
    {
        return $this->property1 - $this->childProperty2;
    }

    public function powerOperation($base, $exponent)
    {
        return pow($base, $exponent);
    }
}