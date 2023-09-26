<?php

$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo json_encode($age) . "<br>";

$array = [1, 2, 3];

echo json_encode(["array" => $array]) . "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);
var_dump($obj);
echo $obj->Peter . "<br>";
echo $obj->Ben . "<br>";
echo $obj->Joe . "<br>";

echo "<br>";

foreach ($obj as $id => $value) {
    echo $id . "=>" . $value . "<br>";
}

echo "<br>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);
var_dump($arr);
echo $arr["Peter"] . "<br>";
echo $arr["Ben"] . "<br>";
echo $arr["Joe"] . "<br>";

echo "<br>";

foreach ($arr as $id => $value) {
    echo $id . "=>" . $value . "<br>";
}

echo "<br>";
