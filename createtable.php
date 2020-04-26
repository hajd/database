<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "planeta";
$table = "zivocich2";

// Vytvorime spojeni s databazi
$conn = new mysqli($servername, $username, $password, $database);

// Overime spojeni
if ($conn->connect_error) {
    die("Spojeni selhalo: " . $conn->connect_error);
}
echo "Spojeni bylo uspesne <br> \r\n";

$sql = 'create table if not exists '.$table .' (
    id int(3) not null primary key auto_increment,
    nazev varchar(30) default null,
    latina varchar(30) default null,
    rise varchar(15) default null,
    podrise varchar(15) default null,
    domaci boolean default false,
    kontinent varchar(20) default null,
    chraneny boolean default false
);';

$sql2 = "describe tables;";

if ($conn->query($sql) === TRUE) {
    echo "Tabulka uspesne vytvorena" . PHP_EOL;
} else {
    echo "Sorry, nepovedlo se vytvorit tabulku: " . $conn->error;
}


$conn->close();
?>