<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serverName = "localhost";
    $userName = "root";
    $password = "CodersLab";
    $baseName = "cinemas_db";

    $conn = new mysqli($serverName, $userName, $password, $baseName);

    if ($conn->connect_error) {
        die("polaczenie nieudane. Blad: " . $conn->connect_error);
    }
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $sql = "INSERT INTO Tickets(quantity, price) VALUES($quantity, $price)";

    $result = $conn->query($sql);
    $type = $_POST["payment_type"];
            $ticketID = $conn->insert_id;
           $date = $_POST["date"];
    if($type == "Nieoplacone" )  {
       $sql = "INSERT INTO Payments(type, date, ticketID) VALUES($type, $date, $ticketID)";

    $result = $conn->query($sql);
    if($result != false) {
    echo ("dodano do bazy: ") . $conn->error;
} else {
    echo "blad podczas dodawania do bazy ";
}
    } 

    $conn->close();
    $conn = null;
}
?>


<h1>Dodawanie Biletow</h1>
<form action="#" method="post"
      <label>
        Liczba biletow : <input type="text" name="quantity" />   
    </label>
    <label>
        Cena: <input type="text" name="price" />
    </label>
    <label>
        Platnosc:<br>
        <input type="radio" name="odpowiedz" value="Karta">Karta<br>
        <input type="radio" name="odpowiedz" value="Gotowka">Gotowka<br>
        <input type="radio" name="odpowiedz" value="Przelew">Przelew<br>
        <input type="radio" name="odpowiedz" value="Nieoplacone">Nieoplacone<br>
    </label>
    <input type="wyslij"/>
</form>