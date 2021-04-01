<?php 
	$data=$_POST;
	require_once('connection.php');
	$query="INSERT INTO users(name,email,avatar) VALUES('".$data['name']."','".$data['email']."','".$data['avatar']."')";

	$result=$conn->query($query);
	if ($result==true) {
		setcookie('cate_add_msg','Thêm mới thành công!',time()+5);
		header('Location: users.php');
	} else {
		setcookie('cate_add_msg','Thêm mới không thành công!',time()+5);
		header('Location: users.php');
	}
	
 ?>