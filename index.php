<?php

echo "Hello World";

$servername = "localhost";
$username = "root";
$password = "root";
$schema = "todo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";

    $stmt = $conn->prepare("Select * from 'todo'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
