<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body style="background-color: blue; color: white">
            
            <b>
                <center>wpisz swoje dane:</center>
            </b>
            
		<?php
			if( isset($_POST["id"]) ){
                                $id = $_POST["id"];
			        $nazwisko = $_POST["nazwisko"];	
                                $imie = $_POST["imie"];
				$telefon = $_POST["telefon"];
				$miasto = $_POST["miasto"];
                             {
/*$nazwisko = $_POST["zmienna"];
print "W formularzu wpisano <B>$nazwisko</B>"; 
print "<br>";
print "W formularzu wpisano <B>$imie</B>"; 
print "<br>";
print "W formularzu wpisano <B>$telefon</B>";
print "<br>";
print "W formularzu wpisano <B>$miasto</B>";
"<br>";*/
} 
				
				if( empty( $nazwisko ) || empty($imie) || empty($telefon) || empty($miasto) ){
					echo "Wypełnij wszystkie pola";
				}else {
					
					$conn = new mysqli("localhost", "root", "vertrigo", "cw");
					
					$odp = $conn->query("INSERT INTO ksiazka(id, nazwisko, imie, telefon, miasto) VALUES ('$id',$nazwisko', '$imie', '$telefon', '$miasto')");
echo "<br>";
					if($odp){
						echo "Udało się!";
					}else {
						echo "Nie udało się dodać użytkownika";
					}
					
					$conn->close();
				}
				
			}
			
		?>
		
            <form method="POST" action="zap.php"> 
		

			Nazwisko: <input name="nazwisko" type="text"> <br>
			Imie: <input name="imie" type="text"><br>
			Telefon: <input name="telefon" type="number"><br>
                        Miasto: <input name="miasto" type="text"><br>
		
			<input type="submit" value="Zapisz">
		
		</form> 
            
            <a href="listowanie.php">Listowanie</a>
	</body>
</html>
