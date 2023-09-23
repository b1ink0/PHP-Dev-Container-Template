<?php
$pdo = new PDO('mysql:dbname=db;host=mysql', 'root_user', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo "<h1>" . 'MySQL version:' . $row['Value'] . "</h1>";

phpinfo();
