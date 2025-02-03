<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Błąd Polaczenia: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

  if ($result->num_rows > 0 ) {
        echo "<h2>Lista użytkowników:</h2>";
        echo "<table border = '1'>";
        echo "<tr><th>ID</th><th>Imie</th><th>Email</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" , $row["id"] , "</td>";
            echo "<td>" , $row["name"] , "</td>";
            echo "<td>" , $row["email"] , "</td>";
            echo "<td>";

        }
        echo "</table>";
}       else {
         echo "Brak użytkowników w bazie";
}

$conn->close();


?>
