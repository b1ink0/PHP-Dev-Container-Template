<?php

class greeting
{
    public static function welcome()
    {
        echo "Hello World!" . "<br>";
    }

    public function __construct()
    {
        self::welcome();
    }
}

greeting::welcome();
new greeting();

class A
{
    public static function welcome()
    {
        echo "Hello World!" . "<br>";
    }
}

class B
{
    public function message()
    {
        A::welcome();
    }
}

$obj = new B();
echo $obj->message();

class domain
{
    protected static function getWebsiteName()
    {
        return "W3Schools.com" . "<br>";
    }
}

class domainW3 extends domain
{
    public $websiteName;
    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3->websiteName;
