<?php

//INSERT INTO `Client` (`name`, `surname`) VALUES ("Grzegorz", "Krasuski");
//INSERT INTO `Client` (`name`, `surname`) VALUES ("Tomasz", "Kowalski");
//INSERT INTO `Client` (`name`, `surname`) VALUES ("Adam", "Nowak"); 
//INSERT INTO `Order` (`description`) VALUES ("opis zamowienia");
//INSERT INTO `Order` (`description`) VALUES ("niepelny opis");
//INSERT INTO `Order` (`description`) VALUES ("zbyt duzo by pisac");

//INSERT INTO `Product` (`name`, `description`, `price`) VALUES ("produktpierwszy", "opis", 50);
//INSERT INTO `Product` (`name`, `description`, `price`) VALUES ("produktdrugi", "opis", 60);
//INSERT INTO `Product` (`name`, `description`, `price`) VALUES ("produkttrzeci", "opis", 70);

$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);

if($conn->connect_error) {
    die("polaczenie nieudane. Blad: " . $conn->connect_error);
}

echo "Polaczenie udane ";

//$name = $_POST['name'];
//$description = $_POST['description'];
//$price = $_POST['price'];
//walidacja $name,$descriptin,$price

$sql = "SELECT * FROM `Product`";


$result = $conn->query($sql);
if($result !=FALSE) {
    echo ("zapytanie wykonane poprawnie");
} else {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
}
if ($result->num_rows >0) {
    foreach ($result as $row) {
        echo "Id: ".$row['id']."<br>";
        echo "Nazwa: ".$row['name']."<br>";
        echo "Opis: ".$row['description']."<br>";
        echo "Cena: ".$row['price']."<br>";
        echo "<hr>";
        
    }
} else {
    echo "w bazie nie ma produktow.<br>";
}

$conn->close();
$conn = null;

