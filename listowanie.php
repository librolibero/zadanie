<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body style="background-color: blue; color: white">
            <p>Wpisane dane</p>
            <?php
$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "cw";

// Zdefiniowanie polaczenia
$conn = new mysqli($servername, $username, $password, $dbname);
// Utwrzeie polaczenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Zapytanie SQL do bazy
$sql = "SELECT id, nazwisko, imie, telefon, miasto FROM ksiazka"; //
$result = $conn->query($sql);

if ($result->num_rows > 0) { //jezeli jest rezultat wiekszy od zera to wyswietli
    
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - nazwisko: " . $row["nazwisko"]. " imie: " . $row["imie"]. " telefon: " . $row["telefon"]. " miasto: " . $row["miasto"]. "<br>";
    }
} else {
    echo "Brak wyników";
}
//zamkniecie polaczenia
$conn->close();
?>
<br>
</body>
</html>
