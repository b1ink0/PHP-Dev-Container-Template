<?php 
$s1 = "<h1> hello  \  World \\ </h1>";
echo $s1;
echo "<br>";
echo trim($s1);
echo "<br>";
echo stripslashes($s1);
echo "<br>";
echo htmlspecialchars($s1);
