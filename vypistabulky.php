<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "planeta";
$table = "zivocich";


// Vytvorime spojeni s databazi
$conn = new mysqli($servername, $username, $password, $database);
// Overime spojeni
if($conn === false){
    die("ERROR: Sorry neslo se pripojit. " . mysqli_connect_error());
}

$sql = "SELECT * FROM $table";

// echo $sql;

if($vysledek = mysqli_query($conn, $sql))
    if(mysqli_num_rows($vysledek) > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Nazev</th>";
    echo "<th>Latina</th>";
    echo "<th>Říše</th>";
    echo "<th>Pod-Říše</th>";
    echo "<th>Domácí</th>";
    echo "<th>Kontinent</th>";
    echo "<th>Je chráněn</th>";
    echo "</tr>";
    while($radek = mysqli_fetch_array($vysledek)){
        echo "<tr>";
        echo "<td>" . $radek['id'] . "</td>";
        echo "<td>" . $radek['nazev'] . "</td>";
        echo "<td>" . $radek['latina'] . "</td>";
        echo "<td>" . $radek['rise'] . "</td>";
        echo "<td>" . $radek['podrise'] . "</td>";
        echo "<td>" . $radek['domaci'] . "</td>";
        echo "<td>" . $radek['kontinent'] . "</td>";
        echo "<td>" . $radek['chraneny'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Free result set
    mysqli_free_result($vysledek);
} else{
    echo "No records matching your query were found.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Uzavreni spojeni
mysqli_close($conn);

?>

<table>
    <tr>
        <td><?php ?></td>
    </tr>
</table>

<br>
<a href="https://www.php.net/manual/en/mysqli.query.php">MySQL - mysqli_query</a>
<a href="https://www.php.net/manual/en/"> PHP dokumentace, anglicky</a>
</body>
</html>
