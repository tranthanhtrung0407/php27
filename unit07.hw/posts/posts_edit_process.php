<?php 
	$data=$_POST;

	require_once('connection.php');

	//Cau lenh truy van
	$query="UPDATE posts SET title='".$data['title']."',description='".$data['description']."',thumbnail='".$data['thumbnail']."',content='".$data['content']."',slug='".$data['slug']."' WHERE id=".$data['id'];

	//Thuc thi cau lenh
	$result=$conn->query($query);

	if ($result==true) {
		setcookie('cate_add_msg','Cập nhật thành công!',time()+5);
		header('location: posts.php');
	} else {
		setcookie('cate_add_msg','Cập nhật không thành công!',time()+5);
		header('location: posts.php');
	}
	
 ?>