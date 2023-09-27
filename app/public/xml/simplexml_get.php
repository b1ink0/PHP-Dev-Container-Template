<?php
$xml = simplexml_load_file("book.xml") or die("File Not Found!");

foreach ($xml->children() as $books) {
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}
echo "<br>";
echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'];
echo "<br>";
echo "<br>";
foreach ($xml->children() as $books) {
    echo $books->title['lang'];
    echo "<br>";
}
