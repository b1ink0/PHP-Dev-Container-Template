<?php 

function test1 () {
    echo "TEST1";
}

function test2 ($test) {
    echo  $test;
}

function test3 ($test) {
    $test("<i>test</i>");
}

test1();
echo "<br>";
test2("<h1>hello world</h1>");
echo "<br>";
test3("test3");