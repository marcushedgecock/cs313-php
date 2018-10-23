<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>
		Marcus's 03teach work
	</title>
</head>
<html>
	<p>
		This was me practicing the assignment on my own
		<br/>this isn't the one I did with my team.
	</p>
	
	<?php echo $_POST["name"]; ?><br/>
	<?php $mailAddress = $_POST["email"]; ?>
	<?php echo '<a href="mailto:$mailAddress">Mail me</a>'; ?><br/>
	<?php echo $_POST["major"]; ?><br/>
	<?php echo $_POST["comments"]; ?><br/>
	
	
</html>