<?php
$servername = "mysql";
$dbname = "db";
$username = "root_user";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $pre = $conn->prepare("SELECT firstname, lastname, email FROM MyGuests LIMIT 5 OFFSET 10");
    $pre->execute();

    $pre->setFetchMode(PDO::FETCH_ASSOC);
    $result = $pre->fetchAll();

    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
    foreach ($result as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>" . "<td>" . $value["firstname"] . "</td>" . "<td>" . $value["lastname"] . "</td>" . "<td>" . $value["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . "<br>" . $e->getMessage();
}

// close connecion
$conn = null;
