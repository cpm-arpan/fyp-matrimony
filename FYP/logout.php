<?php
	session_start();
	$cookie_value = $_SESSION['user'];
	setcookie('user', $cookie_value, time() - (6400), "/");
	session_destroy();
	
	header('Location:index.php');

?>