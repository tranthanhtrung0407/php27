<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="post.php" method="POST" role="form">
            <legend align="center">ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</legend>
            	<h5 align="center">THÔNG TIN SINH VIÊN</h5>
            	<?php
	            	$masinhvien="";
	            	$user="";
	            	$sdt="";
	            	$email="";
	            	$gioitinh="";
	            	$diachi="";

	            	if(isset($_POST['masinhvien'])){
						$masinhvien = $_POST['masinhvien'];
					}
					if(isset($_POST['user'])){
						$user = $_POST['user'];
					}
					if(isset($_POST['sdt'])){
						$sdt = $_POST['sdt'];
					}
					if(isset($_POST['email'])){
						$email = $_POST['email'];
					}
					if(isset($_POST['gioitinh'])){
						$gioitinh = $_POST['gioitinh'];
					}
					if(isset($_POST['diachi'])){
						$diachi = $_POST['diachi'];
					}

            		echo "<br>+ Mã sinh viên: ".$masinhvien;
            		echo "<br>+ Họ và tên: ".$user;
            		echo "<br>+ Số điện thoại: ".$sdt;
            		echo "<br>+ Email: ".$email;
            		echo "<br>+ Giới tính: ".$gioitinh;
            		echo "<br>+ Địa chỉ: ".$diachi;
            	 ?>
        </form>
    </div>
</body>
</html>