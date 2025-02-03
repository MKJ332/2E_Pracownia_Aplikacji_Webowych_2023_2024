<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Błąd Polaczenia: " . $conn->connect_error);
}
if (!isset($_GET["id"])) { die("Brak ID użytkownika."); }
 $id = $_GET["id"];
 $sql = "DELETE FROM users WHERE id = $id";
  if ($conn->query($sql) === TRUE) { echo "Użytkownik został usunięty.";
 } else {
   echo "Bład: $conn-serror:";
 }
   ?>