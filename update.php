<?php
	$servername = "localhost";
	$username = "svecomhr";
	$password = "06Stlu6fO2";
	$ime_baze = "svecomhr_evidencija";
	$conn = new mysqli($servername, $username, $password, $ime_baze);
	if (isset($_POST['prom'])){
		$id = $_POST['id'];
		$odlazak = $_POST['odlazak'];
		$eq = 'a';
		mysqli_query($conn, $eq);
		$query = "UPDATE evidencija SET odlazak = '$odlazak' WHERE ID = '$id'";
		$result=mysqli_query($conn, $query);	
		if ($result === TRUE){
			header('Location: products.php?updated=true');	
		}
		else
		{
			echo "Nešto nije u redu!";
		}
	}
	$conn->close();
?> 

