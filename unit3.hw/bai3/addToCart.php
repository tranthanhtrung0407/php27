<?php 

	include 'data.php';
	session_start();
//lấy ra mã sản phẩm được chọn
	$MSP=$_GET['msp'];

	if (isset($_SESSION['cart'][$MSP])) {
		$_SESSION['cart'][$MSP]['soLuong']++;
	} else {
//lấy thông tin sản phẩm
		$product=$products[$MSP];
		$product['soLuong']=1;
		$_SESSION['cart'][$MSP]=$product;
	};

	header('location:cart.php');
	

 ?>