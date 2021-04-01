<?php 
	$data=$_POST;

	require_once('connection.php');
	if ($data['category']==0) {
		$query="INSERT INTO categories(name,thumbnail,description,slug) VALUES('".$data['name']."','".$data['thumbnail']."','".$data['description']."','".$data['slug']."')";
	} else {
		$query="INSERT INTO categories(name,parent_id,thumbnail,description,slug) VALUES('".$data['name']."','".$data['category']."','".$data['thumbnail']."','".$data['description']."','".$data['slug']."')";
	}
	
	$result=$conn->query($query);
	if ($result==true) {
		setcookie('cate_add_msg','Thêm mới thành công!',time()+5);
		header('Location: categories.php');
	} else {
		setcookie('cate_add_msg','Thêm mới không thành công!',time()+5);
		header('Location: categories.php');
	}
	
 ?>