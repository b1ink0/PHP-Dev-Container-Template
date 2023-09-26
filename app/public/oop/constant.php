<?php
class Goodbye
{
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!" . "<br>";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();
echo $goodbye::LEAVING_MESSAGE;
