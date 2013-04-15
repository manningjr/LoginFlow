<?php

session_start();

if($_SESSION['loggedin'] != 1 && !isset($_SESSION['username']))
{
	header("LOCATION: login.php?redirect=" . $_GET['redirect']);
}

<!-- html login form -->



<form method="post" action="checkLogin.php">
	
	<!-- stuff here -->

</form>