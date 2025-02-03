<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Nowy użytkownik został dodany.";
} else {
    echo "Błąd:" . $conn->error;
}
}
$conn->close();     