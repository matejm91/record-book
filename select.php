<!DOCTYPE html>
<html>
<head>
	<style>
	.obavijest {	
	}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
	<meta charset="utf-8"> 
	<title>Traži stranke</title> 
	<meta name ="viewport" content="width=device-width, intital-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/coustom.css">
</head> 
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">


<?php
	$servername = "localhost";
	$username = "svecomhr";
	$password = "06Stlu6fO2";
	$ime_baze = "svecomhr_evidencija";
	$conn = new mysqli($servername, $username, $password, $ime_baze);
	mysqli_query($conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	if(isset($_POST['submit'])){ 
		if($_POST['ime']){
		$ime_tr=$_POST['ime'];
		}
	}
	$sql="SELECT evidencija.* FROM evidencija WHERE evidencija.ime LIKE '%" . $ime_tr .  "%' ORDER BY odlazak ASC"; 
	$result=mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$id = $row['ID']; 
  		$ime = $row['ime'];  
        $prezime = $row['prezime'];
		$br_osobne = $row['br_osobne'];
		$razlog = $row['razlog'];
		$datum = $row['datum'];
		$dolazak = $row['dolazak'];
		$odlazak = $row['odlazak'];
	 		echo "Stranke trenutno u objektu";
	 		echo '<div class="container">
				<table class="table table-striped" border = 1>
				<tr>
         			<td><b>Ime stranke</b></td>
         			<td><b>Prezime stranke</b></td>
         			<td><b>Broj osobne iskaznice (ili druge isprave)</b></td>
         			<td><b>Razlog posjeta</b></td>
         			<td><b>Datum posjeta</b></td>
         			<td><b>Vrijeme dolaska</b></td>
         			<td><b>Vrijeme odlaska</b></td>
         			<td></td>
   				</tr></div>';
			while($row = mysqli_fetch_array($result)){
				echo "<tr>
          			<td>" . $row['ime'] . "</td>
          			<td>" . $row['prezime'] . "</td>
          			<td>" . $row['br_osobne'] . "</td>
					<td>" . $row['razlog'] . "</td>
					<td>" . $row['datum'] . "</td>
					<td>" . $row['dolazak'] . "</td>
					<td>" . $row['odlazak'] . "</td>
          			<td>" . "<a href=\"http://sve91.com.hr/evidencija/delete.php?id=". $row['ID'] ."\" "."class='btn btn-danger btn-md' onclick='return confirm(\"Jeste li sigurni da želite obrisati zapis?\")';".">Obrisati</a>" . "</td>
				</tr>";
			}
		 	echo "<p>&nbsp;</p></table>";
		 	echo "<p>&nbsp;</p>";
  	}
	else
	{ 
  		 echo  "<p>Molimo unesite upit za pretraživanje</p>";     
	}
	$conn->close();
?>
<br><a href="http://sve91.com.hr/evidencija/products.php" class="btn">Vrati se na početnu stranicu</a></br>
			</div>
		</div>
	</div>
</body>
</html>
