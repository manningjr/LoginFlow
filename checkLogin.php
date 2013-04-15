<?php

require "database.php";

$username = $_POST['username'];
$password = $_POST['password'];

if($database->isLoggedIn($username, $password))
{
	$_SESSION['loggedin'] = 1;
	$_SESSION['user'] = $database->getUser($username);
}
else
{
	header('LOCATION: login.php');
}

?>