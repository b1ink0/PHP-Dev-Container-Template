<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $pre = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES (:firstname, :lastname, :email)
    ");
    $pre->bindParam(":firstname", $firstname);
    $pre->bindParam(":lastname", $lastname);
    $pre->bindParam(":email", $email);

    // insert a row
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $pre->execute();

    // insert another row
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $pre->execute();

    // insert another row
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $pre->execute();

    echo "Data Inserted Successfully" . "<br>";
} catch (PDOException $e) {
    echo "Error: " . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
