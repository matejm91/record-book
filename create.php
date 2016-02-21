<!DOCTYPE html>
<html>
<head>
	<style>
	.obavijest {	
	}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
	<meta charset="utf-8"> 
	<title>HNK - Unos nove stranke</title> 
	<meta name ="viewport" content="width=device-width, intital-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/coustom.css">
</head> 
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">	
				<br><form action="http://sve91.com.hr/evidencija/create2.php" method="post" form accept-charset="utf-8">
					<div class="form-group">
    						<label for="stvaranje"><h3>Unos nove stranke</h3></label>
    						<input type="text" class="form-control" id="stvaranje" placeholder="Ime stranke" name="ime_stvori"></br>
    						<input type="text" class="form-control" id="stvaranje" placeholder="Prezime stranke" name="prezime_stvori"></br>
    						<input type="number" class="form-control" id="stvaranje" placeholder="Broj osobne iskaznice stranke" name="br_osobne"></br>
    						<input type="text" class="form-control" id="stvaranje" placeholder="Razlog posjeta stranke" name="razlog"></br>
    						<input type="text" class="form-control" id="stvaranje" placeholder= "<?php echo date("d.m.y"); ?>" name="datum"></br>
    						<input type="text" class="form-control" id="stvaranje" placeholder="<?php echo date("h:i:sa"), "  <--Prepiši vrijeme!"; ?>" name="dolazak"></br>
    						<input type="text" class="form-control" id="stvaranje" placeholder="Tablice vozila stranke" name="tablica"></br>
    						<input type="text" class="form-control" id="stvaranje" placeholder="Naziv tvrtke stranke" name="tvrtka"></br>
							<input type="number" class="form-control" id="stvaranje" placeholder="Broj osoba u pratnji" name="pratnja"></br>
							<input type="text" class="form-control" id="stvaranje" placeholder="Upisati vrijeme izlaska stranke" name="odlazak"></br>
							<input type="text" class="form-control" id="stvaranje" placeholder="Napomena" name="napomena"></br>
  					</div>
					<button type="submit" name="create" class="btn btn-primary">Stvori</button>
	 			</form> 


<br><a href="http://sve91.com.hr/evidencija/products.php" class="btn">Vrati se na početnu stranicu</a></br>
			</div>
		</div>
	</div>
</body>
</html>
