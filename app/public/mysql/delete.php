<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM MyGuests WHERE id=3";

    $conn->exec($sql);

    echo "Deleted!";
} catch (PDOException $e) {
    echo "Error: " . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
