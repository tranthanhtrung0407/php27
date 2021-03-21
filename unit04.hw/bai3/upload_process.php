<?php 
	session_start();
	if (isset($_POST['name'])) {
		$name=$_POST['name'];
	}

	$download=$_FILES["file_anh"]["name"];
	$target_file = "upload/" . basename($_FILES["file_anh"]["name"]);
		
	move_uploaded_file($_FILES["file_anh"]["tmp_name"], $target_file);
	$_SESSION[$name]=array(
		'name'=>$name,
		'file_anh'=>$_FILES["file_anh"]["tmp_name"],
		'download'=>$download,
	);

	header('location: index.php');
 ?>