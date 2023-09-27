<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')
    ";
    $conn->exec($sql);
    echo "Data Inserted Successfully" . "<br>";
} catch (PDOException $e) {
    echo "<pre>" . $sql . "</pre>" . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
