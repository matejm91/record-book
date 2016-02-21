<?php
	$servername = "localhost";
	$username = "svecomhr";
	$password = "06Stlu6fO2";
	$ime_baze = "svecomhr_evidencija";
	$conn = new mysqli($servername, $username, $password, $ime_baze);  
	$id = $_GET['id'];
	$eq = 'a';
	mysqli_query($conn, $eq);
	$query = "DELETE FROM evidencija WHERE ID = '$id'";
	$result=mysqli_query($conn, $query);	
	if ($result === TRUE){
		header('Location: products.php?deleted=true');
	}
	else
	{
		echo "Nešto nije u redu!";
	}
	$conn->close();
?> 
