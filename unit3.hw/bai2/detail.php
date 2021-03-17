<?php 
	session_start();
	if (isset($_GET['masinhvien'])) {
		$masinhvien=$_GET['masinhvien'];
	}
	if (isset($_SESSION['info'])) {
		$data_arr=$_SESSION['info'][$masinhvien];
	}
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 style="text-align: center;">THÔNG TIN SINH VIÊN</h3>
            <ul>
            	<li>
            		<span>Mã sinh viên:</span>
            		<?php 
            			echo $data_arr['masinhvien'];
            		 ?>
            	</li>
            	<li>
            		<span>Họ và Tên:</span>
            		<?php 
            			echo $data_arr['user'];
            		 ?>
            	</li>
            	<li>
            		<span>Số Điện Thoại:</span>
            		<?php 
            			echo $data_arr['sdt'];
            		 ?>
            	</li>
            	<li>
            		<span>Email:</span>
            		<?php 
            			echo $data_arr['email'];
            		 ?>
            	</li>
            	<li>
            		<span>Giới Tính:</span>
            		<?php 
            			echo $data_arr['gioitinh'];
            		 ?>
            	</li>
            	<li>
            		<span>Địa chỉ:</span>
            		<?php 
            			echo $data_arr['diachi'];
            		 ?>
            	</li>
            </ul>
    </div>
</body>
</html>