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
<html lang="en">
<head>
	<link type="text/css" rel="stylesheet" href="shoppingCart.css" />
	<meta charset="utf-8">
	<title>
		Gary Busey Photos
	</title>
	<link rel="icon" href="https://images.encyclopediadramatica.rs/thumb/9/9b/GBH.png/150px-GBH.png" />
</head>

<body>

<h1>What is your address?</h1>
<form action="confirmation.php" method="post">
	Street Address:<br/><input type="text" name="address"><br/>
	City:<br/><input type="text" name="city"><br/>
	State:<br/><input type="text" name="state"><br/>
	Zip Code:<br/><input type="text" name="zipCode"><br/><br/>
	<input type="submit" value="Complete Purchase">
</form>

<form action="viewCart.php" method="post">
	<input type="submit" value="Return To Cart">
</form>

</body>
</html>