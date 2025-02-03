<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Błąd Polaczenia: " . $conn->connect_error);
}
sql = "SELECT * FROM users";
 $result = $conn->query($sql);
 echo "<h2>Lista użytkowników</h2>";
echo "<table border='1'>"; 
echo "<tr><th>ID</th><th>Imię</th><th>Email</th><th>Akcja</th></tr>"; 

while ($row = $result->fetch_assoc()){
  echo "<tr>"; 
    echo "<td>" 
    echo "<td>" $row["id"] . "</td>"; $row["name"] . "</td>"; 
    echo "<td>".$row["email"] . "</td>"; 
    echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edytuj</a></td>"; 
    echo "</tr>";
}