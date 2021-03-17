<?php 
session_start();
	if (isset($_GET['masinhvien'])) {
		$masinhvien=$_GET['masinhvien'];
		unset($_SESSION['info'][$masinhvien]);
	}
	setcookie('msg','Xóa Thành Công',time()+5);
	header("location: list.php");
 ?>