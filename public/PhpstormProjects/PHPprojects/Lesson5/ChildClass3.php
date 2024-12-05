<?php

namespace Lesson5;

require_once 'Main.php';

class ChildClass3 extends Main
{
    protected $childProperty3;

    public function getChildProperty3()
    {
        return $this->childProperty3;
    }

    public function setChildProperty3($value)
    {
        $this->childProperty3 = $value;
    }

    public function multiplyProperties()
    {
        return $this->property1 * $this->childProperty3;
    }

    public function powerOperation($base, $exponent)
    {
        return pow($base, $exponent);
    }
}