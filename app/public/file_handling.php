<?php
$path = "../data/test.txt";

readfile($path);

echo "<br><br>";

$file1 = fopen($path, "r") or die("unable to open");
echo fread($file1, filesize($path));
fclose($file1);

echo "<br><br>";

$file2 = fopen($path, "r") or die("unable to open");
echo fgets($file2);
fclose($file2);

echo "<br><br>";

$file3 = fopen($path, "r") or die("unable to open");
while (!feof($file3)) {
    echo fgets($file3) . "<br>";
}
fclose($file3);

$path2 = "../data/";

$file4 = fopen($path2 . "test1.txt", "w");
fwrite($file4, "Test1\n");
fwrite($file4, "Test2\n");
fwrite($file4, "Test3\n");
fclose($file4);
