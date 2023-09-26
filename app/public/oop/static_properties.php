<?php
class pi
{
    public static $value = 3.14159;
    public function staticValue()
    {
        return self::$value;
    }
}

$pi = new pi();
echo pi::$value . "<br>";
echo $pi->staticValue() . "<br>";

class x extends pi
{
    public function xStatic()
    {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value . "<br>";

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic() . "<br>";
