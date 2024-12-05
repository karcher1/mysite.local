<?php

namespace Lesson5;

require_once 'ChildClass3.php';

class GrandChild2 extends ChildClass3
{
    private $grandChildProperty2;

    public function getGrandChildProperty2()
    {
        return $this->grandChildProperty2;
    }

    public function setGrandChildProperty2($value)
    {
        $this->grandChildProperty2 = $value;
    }

    public function multiplyProperties()
    {
        return $this->childProperty3 * $this->grandChildProperty2;
    }

    public function subtractParentAndOwn()
    {
        return $this->property2 - $this->grandChildProperty2;
    }
}
