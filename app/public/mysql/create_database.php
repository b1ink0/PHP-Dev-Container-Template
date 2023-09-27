<?php
$servername = "mysql";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    $conn->query($sql);
    echo "Database created successfully" . "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
