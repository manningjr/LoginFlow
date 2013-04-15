<?php

session_start();

if($_SESSION['loggedin'] != 1 && !isset($_SESSION['username']))
{
	header("LOCATION: login.php?redirect=" . $_SESSION['PHP_SELF']);
}


print_r($_SESSION);


?>