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
	<meta charset="utf-8">
	<title>
		Gary Busey Photos
	</title>
	<link rel="icon" href="https://images.encyclopediadramatica.rs/thumb/9/9b/GBH.png/150px-GBH.png" />
	<link type="text/css" rel="stylesheet" href="shoppingCart.css" />
</head>

<body>

<h1>These are the items you have in your cart</h1>

<p id="bold">Gary Busey 1</p>
<p><?php echo "Quantity: " . $_SESSION['garyBusey1']; ?> </p>
<p id="bold">Gary Busey 2</p>
<p><?php echo "Quantity: " . $_SESSION['garyBusey2']; ?> </p>
<p id="bold">Gary Busey 3</p>
<p><?php echo "Quantity: " . $_SESSION['garyBusey3']; ?> </p>
<p id="bold">Gary Busey 4</p>
<p><?php echo "Quantity: " . $_SESSION['garyBusey4']; ?> </p>

<form action="checkout.php" method="post">
	<input type="submit" value="Check Out">
</form><br/>

<form action="browseItems.php" method="post">
	<input type="submit" value="Change Items">
</form>

</body>
</html>