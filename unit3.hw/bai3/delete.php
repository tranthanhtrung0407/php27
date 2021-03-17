<?php 

	session_start();
	$MSP=$_GET['msp'];

	unset($_SESSION['cart'][$MSP]);
	header('location: cart.php');

 ?>