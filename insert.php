<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "planeta";
// $table = "zivocich2";

// Vytvorime spojeni s databazi
$conn = new mysqli($servername, $username, $password, $database);

// Overime spojeni
if ($conn->connect_error) {
    die("Spojeni selhalo: " . $conn->connect_error);
}
echo "Spojeni bylo uspesne <br> \r\n";

$datum = date("Y.m.d");
$sql = "INSERT INTO zivocich2 (nazev,latina,rise,podrise,domaci,kontinent,chraneny,datum) values ('Kocka psovita','Cocciiita Psoiiita','savec','kockopes',FALSE,'Atlantida',TRUE,curdate());";

 
if ($conn->query($sql) === TRUE) {
    echo "Zaznam vlozen";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>