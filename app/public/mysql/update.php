<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET lastname='Yoe' WHERE id=4";
    $pre = $conn->prepare($sql);
    $pre->execute();

    echo $pre->rowCount() . " Rows Updated!";
} catch (PDOException $e) {
    echo "Error: " . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
