<?php

class Fruit
{
    public $name;

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$obj = new Fruit("Apple");
$obj->set_name("Apple");
echo $obj->get_name() . "<br>";
echo $obj->name . "<br>";
var_dump($obj instanceof Fruit);
