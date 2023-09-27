<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')
    ");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com')
    ");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Julie', 'Dooley', 'julie@example.com')
    ");

    $conn->commit();
    echo "Data Inserted Successfully" . "<br>";
} catch (PDOException $e) {
    $conn->rollBack();
    echo "Error: " . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
