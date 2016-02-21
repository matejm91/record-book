<?php 
	$servername = "localhost";
	$username = "svecomhr";
	$password = "06Stlu6fO2";
	$ime_baze = "svecomhr_evidencija";
	$conn = new mysqli($servername, $username, $password, $ime_baze);
	mysqli_query($conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	if(isset($_POST['create'])) {	
		$ime=$_POST['ime_stvori'];
		$prezime=$_POST['prezime_stvori'];
		$br_osobne=$_POST['br_osobne'];
		$razlog=$_POST['razlog'];
		$datum=$_POST['datum'];
		$dolazak=$_POST['dolazak'];
		$registracija=$_POST['tablica'];
		$tvrtka=$_POST['tvrtka'];
		$pratnja=$_POST['pratnja'];
		$odlazak=$_POST['odlazak'];
		$napomena=$_POST['napomena'];
		if ((isset($ime) != TRUE) or (isset($prezime) != TRUE)) {
				echo "<br>"."<p style='font-size:15px; font-color: green;'>"."</br>", "Niste unijeli ime ili prezime stranke" ."</span>". '<br><a href="http://sve91.com.hr/evidencija/products.php">Vrati se na početnu stranicu</a></br>';
			}
			else
			{
				$eq = 'a';
				mysqli_query($conn, $eq);
				$id=mysqli_insert_id($conn);
				$sql="INSERT INTO evidencija (ime, prezime, br_osobne, razlog, datum, dolazak, registracija, tvrtka, pratnja, odlazak, napomena) VALUES ('$ime', '$prezime', '$br_osobne', '$razlog', '$datum', '$dolazak', '$registracija', '$tvrtka', '$pratnja', '$odlazak', '$napomena')";
					if ($conn->query($sql) === TRUE) {
						header('Location:/evidencija/products.php?created=true');
					}
					else
					{
						echo "Greška: " . $sql . "<br>" . $conn->error;
					} 
			}
	}
	$conn->close();
?>
