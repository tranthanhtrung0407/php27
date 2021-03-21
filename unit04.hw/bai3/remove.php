<?php 
session_start();
	if (isset($_GET['name'])) {
		$name=$_GET['name'];
		unset($_SESSION[$name]);
	}

	header("location: index.php");
 ?>