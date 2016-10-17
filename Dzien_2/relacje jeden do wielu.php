<?php

//CREATE TABLE uczen(
//id int NOT NULL AUTO_INCREMENT,
//klasa_id int NOT NULL,
//imie varchar(255),
//        nazwisko varchar(255),
//PRIMARY KEY(id),
//FOREIGN KEY(klasa_id) REFERENCES klasa(id)
//);

//
//CREATE TABLE opinions(
//id int NOT NULL AUTO_INCREMENT,
//product_id int NOT NULL,
//description varchar(255),
//PRIMARY KEY(id),
//FOREIGN KEY(product_id) REFERENCES product(id)
//);

//INSERT INTO `opinions` (product_id,description) VALUES
//(7, 'opinia 1'),
//(6, 'opinia2'),
//(6, 'opinia4'),
//(6, 'opinia5'),
//(6, 'opinia10')


//SELECT * FROM `Product` LEFT JOIN `opinions` ON Product.id = opinions.product_id




$server = "localhost";
$user = "root";
$pass = "CodersLab";
$baseName = "exercises_db";
$conn = new mysqli($server, $user, $pass, $baseName);
if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: :") . $conn->connect_error;
}
$sql = "SELECT *, Product.description AS product_description FROM `Product` LEFT JOIN `opinions` ON Product.id = opinions.product_id";
$result = $conn->query($sql);
var_dump($result);
if ($result != false) {
    echo "Zapytanie wykonane poprawnie. <br>";
} else {
    echo "Blad podczas wykonywania zapytania: " . $conn->error . "<br>";
}
$last_product_id = null;
foreach ($result as $row) {
    if ($row['product_id'] != $last_product_id) {
        // wyswielt info o produkcie
        echo "<hr>";
        echo "Nazwa: ". $row['name'] . "<br>";
        echo "Opis: " . $row['product_description'] . ", cena: " . $row['price']  ."<br>";
        $last_product_id = $row['product_id'];
    }
    //wywietl opinie o produkcie
    echo $row['description'];
    echo "<br>";
}
