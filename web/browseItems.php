<?php
session_start();
if (isset ($_POST['garyBusey1'])) {
	$_SESSION['garyBusey1'] = $_POST['garyBusey1'];
}	
if (isset ($_POST['garyBusey2'])) {
	$_SESSION['garyBusey2'] = $_POST['garyBusey2']; 
}
if (isset ($_POST['garyBusey3'])) {
	$_SESSION['garyBusey3'] = $_POST['garyBusey3']; 
}
if (isset ($_POST['garyBusey4'])) {
	$_SESSION['garyBusey4'] = $_POST['garyBusey4']; 
}
?>
<!DOCTYPE HTML>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="shoppingCart.css" />
	<title>
		Gary Busey Photos
	</title>
	<link rel="icon" href="https://images.encyclopediadramatica.rs/thumb/9/9b/GBH.png/150px-GBH.png" />
</head>
<body>
	<h1 align="center">
		Welcome to Gary Busey Photos!
	</h1>
	<p align="center">
		Do you love seeing Gary Busey appear in things
		such as this commercial?
	</p>
	<p align="center">
		<iframe src="https://www.youtube.com/embed/OE4MrFx2XCs"></iframe>
	</p>
	<p align="center">
		If so, then you need to keep Mr. Busey around 
		at all times!
	</p>
	<p align="center">
		Choose from our selection of photographs and 
		take Gary home today!
	</p>
	<div class="container">
		<form method="post" action="viewCart.php" >
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<?php echo '<img src="https://imgur.com/DdgevxH.png" class="img-fluid" alt="gary busey" height="300" width="300">'; ?>
					<br/>
					<p align="center">Gary Busey 1</p>
					<p align="center">$25</p>
					<input type="number" name="garyBusey1" value="0">
				</div>
				<div class="col-sm-4 col-md-3">
					<?php echo '<img src="https://imgur.com/XuSYAYp.png" class="img-fluid" alt="gary busey" height="300" width="300">'; ?>
					<br/>
					<p align="center">Gary Busey 2</p>
					<p align="center">$30</p>
					<input type="number" name="garyBusey2" value="0">
				</div>
				<div class="col-sm-4 col-md-3">
					<?php echo '<img src="https://imgur.com/n2fwWYA.png" class="img-fluid" alt="gary busey" height="300" width="300">'; ?>
					<br/>
					<p align="center">Gary Busey 3</p>
					<p align="center">$5</p>
					<input type="number" name="garyBusey3" value="0">
				</div>
				<div class="col-sm-4 col-md-3">	
					<?php echo '<img src="https://imgur.com/UXuq22E.png" class="img-fluid" alt="gary busey" height="300" width="300">'; ?>
					<br/>
					<p align="center">Gary Busey 4</p>
					<p align="center">$10</p>
					<input type="number" name="garyBusey4" value="0">
				</div>
				<div id="center">
					<input type="submit" value="View Cart">
				<div>
			</div>
		</form>
	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>