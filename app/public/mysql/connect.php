<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success!";
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

// close connecion
$conn = null;
