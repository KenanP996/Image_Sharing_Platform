<?php
$servername = "localhost";
$username = "root";
$password = "root";
$schema = "todo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema", $usernam, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>