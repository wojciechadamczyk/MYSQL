<?php
if (isset($_GET['product_id'])) {
$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);

if($conn->connect_error) {
    die("polaczenie nieudane. Blad: " . $conn->connect_error);
}

$sql = "DELETE FROM `product` WHERE id = ".$_GET['product_id'];


$result = $conn->query($sql);
if($result == false) {
    echo ("blad podczas wykonania zapytaia: ") . $conn->error;
} else {
    echo "usuwanie wykonanie poprawnie ";
}

$conn->close();
$conn = null;
} else {
    echo "nie podano id produktu";
}