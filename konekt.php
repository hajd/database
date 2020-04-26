<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvorime spojeni s databazi
$conn = new mysqli($servername, $username, $password);

// Overime spojeni
if ($conn->connect_error) {
    die("Spojeni selhalo: " . $conn->connect_error);
}
echo "Spojeni bylo uspesne \r\n";

?>
