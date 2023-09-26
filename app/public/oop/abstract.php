<?php
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

class Audi extends Car
{
    public function intro(): string
    {
        return   "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!";
    }
}



// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

echo "<br>";

// Let's look at another example where the abstract method has an argument, and the child class has two optional arguments that are not defined in the parent's abstract method:

abstract class ParentClass
{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass
{
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear")
    {
        if ($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
