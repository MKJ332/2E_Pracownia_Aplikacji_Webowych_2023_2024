<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Błąd Polaczenia: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql)=== TRUE) {
        ECHO "Dane użytkownika zostały zaaktualizowane.";
    } else {
        echo "Błąd:" . $conn->error;
    }
}

$conn->close();
?>