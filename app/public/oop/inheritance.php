<?php
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}." . "<br>";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? " . "<br>";
    }
}
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();


final class Fruit1
{
    // some code
    public $name;
}

// will result in error
class Strawberry1 extends Fruit
{
    // some code
    function __construct($name)
    {
        $this->name = $name;
    }
}

$obj = new Strawberry1("Apple");
echo $obj->name;
