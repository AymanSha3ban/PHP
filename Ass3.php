<?php
// Name : Ayman Shaaban 
//ID : 23120261
// Q 1: 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hospital";

$conn = new mysqli($servername, $username, $password , $dbname);

if ($conn->connect_error) {
    die("Failed connection" . $conn->connect_error);
}
// $sqlDB = "CREATE DATABASE Hospital";
// $conn->query($sqlDB);

$sql = "CREATE TABLE IF NOT EXISTS Patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    diagnosis VARCHAR(100)
)";
$conn->query($sql);

$conn->query("INSERT INTO Patients (name, age, diagnosis) VALUES ('Ali Ahmed', 45, 'Diabetes')");
$conn->query("INSERT INTO Patients (name, age, diagnosis) VALUES ('Mona Hassan', 32, 'Asthma')");
$conn->query("INSERT INTO Patients (name, age, diagnosis) VALUES ('Khaled Mostafa', 55, 'Hypertension')");

echo "All are DONE:)<br>";

$p1=$conn->query("SELECT * FROM Patients WHERE age > 40");
$p2=$conn->query("SELECT * FROM Patients WHERE diagnosis = 'Asthma'");

echo "<h3>Patients older than 40:</h3>";
while ($row = $p1->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Diagnosis: " . $row["diagnosis"] . "<br>";
}

echo "<h3>Patients diagnosed with Asthma:</h3>";
while ($row = $p2->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Diagnosis: " . $row["diagnosis"] . "<br>";
}


$conn->close();

//==================================================================================================
//==================================================================================================
//==================================================================================================

// Q 2: 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Schoollll";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed! " . $conn->connect_error);
}

// $sqlDB = "CREATE DATABASE Schoollll";
// $conn->query($sqlDB);

$sql = "CREATE TABLE IF NOT EXISTS Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    grade INT,
    section VARCHAR(10)
)";
$conn->query($sql);

$stmt = $conn->prepare("INSERT INTO Students (name, grade, section) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $name, $grade, $section);

$name = "Sara Ali";
$grade = 10;
$section = "A";
$stmt->execute();

$name = "Omar Youssef";
$grade = 9;
$section = "B";
$stmt->execute();

$name = "Laila Tarek";
$grade = 10;
$section = "A";
$stmt->execute();

echo "DONE :) <br>";


$p1=$conn->query("SELECT * FROM Students WHERE grade = 10");
$p2=$conn->query("SELECT * FROM Students WHERE section = 'A'");

echo "<h3>Students in grade 10:</h3>";
while ($row = $p1->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Grade: " . $row["grade"] . " - Section: " . $row["section"] . "<br>";
}

echo "<h3>Students in section A:</h3>";
while ($row = $p2->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Grade: " . $row["grade"] . " - Section: " . $row["section"] . "<br>";
}



$stmt->close();
$conn->close();


?>
