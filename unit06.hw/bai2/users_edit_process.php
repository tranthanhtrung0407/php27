<?php 
	$data=$_POST;

	require_once('connection.php');

	//Cau lenh truy van
	$query="UPDATE users SET name='".$data['name']."',email='".$data['email']."',avatar='".$data['avatar']."' WHERE id=".$data['id'];

	//Thuc thi cau lenh
	$result=$conn->query($query);

	if ($result==true) {
		setcookie('cate_add_msg','Cập nhật thành công!',time()+5);
		header('location: users.php');
	} else {
		setcookie('cate_add_msg','Cập nhật không thành công!',time()+5);
		header('location: users.php');
	}
	
 ?>