<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();

echo "<br>";

$x = $xmlDoc->documentElement;
foreach ($x->childNodes as $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
