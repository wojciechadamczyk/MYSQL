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
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $serverName = "localhost";
    $userName = "root";
    $password = "CodersLab";
    $baseName = "exercises_db";

    $conn = new mysqli($serverName, $userName, $password, $baseName);

    if ($conn->connect_error) {
        die("polaczenie nieudane. Blad: " . $conn->connect_error);
    }

    echo "Polaczenie udane ";

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
//walidacja $name,$descriptin,$price

    $sql = "INSERT INTO `Product` (`name`, `description`,`price`)"
            . "VALUES ('$name','$description',$price)";


    $result = $conn->query($sql);
    if ($result != FALSE) {
        echo ("zapytanie wykonane poprawnie");
    } else {
        echo ("Blad podczas wykonywania zapytania: " . $conn->error);
    }

    $conn->close();
    $conn = null;
}
?>
<h1>Dodawanie produktow</h1>
<form action="#" method="post"
      <label>
        nazwa : <input type="text" name="name" />   
    </label>
    <label>
        opis:<input type="text" name="description" />
    </label>
    <label>
        cena:<input type="text" name="price" />
    </label>
      <input type="submit"/>
</form>