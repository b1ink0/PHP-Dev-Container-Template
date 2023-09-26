<?php
$cookie_name = "user";
$cookie_value = "b1ink0";

setcookie($cookie_name, $cookie_value, time() + 60 * 60 * 24 * 30, "/");

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
