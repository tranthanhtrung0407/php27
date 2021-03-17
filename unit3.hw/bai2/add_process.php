<?php 
	session_start();
	if (isset($_POST['masinhvien'])) {
		$masinhvien=$_POST['masinhvien'];
	}
	if (isset($_POST['user'])) {
		$user=$_POST['user'];
	}
	if (isset($_POST['sdt'])) {
		$sdt=$_POST['sdt'];
	}
	if (isset($_POST['email'])) {
		$email=$_POST['email'];
	}
	if (isset($_POST['gioitinh'])) {
		$gioitinh=$_POST['gioitinh'];
	}
	if (isset($_POST['diachi'])) {
		$diachi=$_POST['diachi'];
	}
	$_SESSION['info'][$masinhvien]=[
		'masinhvien'=>$masinhvien,
		'user'=>$user,
		'sdt'=>$sdt,
		'email'=>$email,
		'gioitinh'=>$gioitinh,
		'diachi'=>$diachi,
	];
	setcookie('msg','Thêm Mới Thành Công!',time()+5);
	header('location: list.php');
 ?>