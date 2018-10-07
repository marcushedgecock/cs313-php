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
if (isset ($_POST['address'])) {
	$_SESSION['address'] = $_POST['address']; 
}
if (isset ($_POST['city'])) {
	$_SESSION['city'] = $_POST['city']; 
}
if (isset ($_POST['street'])) {
	$_SESSION['street'] = $_POST['street']; 
}
if (isset ($_POST['zipCode'])) {
	$_SESSION['zipCode'] = $_POST['zipCode']; 
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

<h1>Confirmation</h1>

<h1>Your Address:</h1>

<p id="bold">Street Address:</p>
<p><?php echo $_SESSION['address']; ?> </p>
<p id="bold">City:</p>
<p><?php echo $_SESSION['city']; ?> </p>
<p id="bold">State</p>
<p><?php echo $_SESSION['state']; ?> </p>
<p id="bold">Zip Code:</p>
<p><?php echo $_SESSION['zipCode']; ?> </p>

<h1>Your Items Purchased:</h1>
<p id="bold">Gary Busey 1 photo:</p>
<p><?php echo $_SESSION['garyBusey1']; ?> </p>
<p id="bold">Gary Busey 2 photo:</p>
<p><?php echo $_SESSION['garyBusey2']; ?> </p>
<p id="bold">Gary Busey 3 photo:</p>
<p><?php echo $_SESSION['garyBusey3']; ?> </p>
<p id="bold">Gary Busey 4 photo:</p>
<p><?php echo $_SESSION['garyBusey4']; ?> </p>

<h1>Thank you for your purchase!</h1>

<img 
	src="https://media.giphy.com/media/9bImyl84LNr4Q/giphy.gif"
	height="160"
	width="123">Gary Busey says "Thanks!"

</body>
</html>