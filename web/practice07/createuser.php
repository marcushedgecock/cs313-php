<?php

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = $_POST['password'];

if (!isset($username) || $username == "" || !isset($password) || $password == "") {
	header("Location: signup.php");
	die();
}

$passwordhash = password_hash($password, PASSWORD_BCRYPT);
var_dump($username);
var_dump($password);
var_dump($hash);

require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO login(username, password) VALUES(:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username',$username);

$statement->bindValue(':password', $hashedPassword);

$statement->execute();

header("Location: signin.php");
die();

?>