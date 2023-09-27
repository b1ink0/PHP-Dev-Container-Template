<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )
    ";
    $conn->exec($sql);
    echo "Table MyGuests Created Successfully" . "<br>";
} catch (PDOException $e) {
    echo "<pre>" . $sql . "</pre>" . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
