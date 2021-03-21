<?php 
	session_start();

	$MSP=$_GET['msp'];
	if ($_SESSION['cart'][$MSP]['soLuong']>1) {
		$_SESSION['cart'][$MSP]['soLuong']--;
	} else {
		unset($_SESSION['cart'][$MSP]);
	};

	header('location:cart.php');
	
 ?>