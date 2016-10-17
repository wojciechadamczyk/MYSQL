<?php

$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);

if($conn->connect_error) {
    die("polaczenie nieudane. Blad: " . $conn->connect_error);
}

$sql = "SELECT *FROM `Product`";


$result = $conn->query($sql);
if($result == false) {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
} else {
    
foreach ($result as $row) {
    echo $row['name'] . '<a href="zadanieC1.php?product_id='.$row['id'].'"> usun</a><br>';
}
}
$conn->close();
$conn = null;


