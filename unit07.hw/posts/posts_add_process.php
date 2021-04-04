<?php 
	$data=$_POST;
	require_once('connection.php');
	$query="INSERT INTO posts(title,description,thumbnail,content,slug) VALUES('".$data['title']."','".$data['description']."','".$data['thumbnail']."','".$data['content']."','".$data['slug']."')";

	$result=$conn->query($query);
	if ($result==true) {
		setcookie('cate_add_msg','Thêm mới thành công!',time()+5);
		header('Location: posts.php');
	} else {
		setcookie('cate_add_msg','Thêm mới không thành công!',time()+5);
		header('Location: posts.php');
	}
	
 ?>