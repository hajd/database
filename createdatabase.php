<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "planeta";

// Vytvorime spojeni s databazi
$conn = new mysqli($servername, $username, $password);

// Overime spojeni
if ($conn->connect_error) {
    die("Spojeni selhalo: " . $conn->connect_error);
}
echo "Spojeni bylo uspesne <br> \r\n";


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS ".$database.";";
if ($conn->query($sql) === TRUE) {
    echo "Databaze uspesne vytvorena" . PHP_EOL;
} else {
    echo "Sorry, nepovedlo se: " . $conn->error;
}

$conn->close();
?> 