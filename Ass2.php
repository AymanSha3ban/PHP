<?php
//Name: Ayman Shaaban
//ID: 23120261
//Q1 : 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE school";
if (mysqli_query($conn, $sql)) {
    echo "Database school created successfully.";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);



//Q2
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE hospital";
    $conn->exec($sql);
    echo "Database hospital created successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>
