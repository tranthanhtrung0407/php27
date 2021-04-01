<?php 
	// Thong so ket noi CSDL
	$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

	$username = "root";   // Tên đăng nhập
		
	$password = "";    // Mật khẩu truy cập
		
	$dbname = "php27_blogs";   // Tên cơ sở dữ liệu muốn kết nối đến

	// Tạo kết nối đến CSDL
		
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, "UTF8");

	// var_dump($conn);

	// Câu lệnh truy vấn
	$query = "SELECT * FROM users";

	// Thực thi câu lệnh
	$result = $conn->query($query);

	// Tạo 1 mảng để chứa dữ liệu
	$users = array();

	while($row = $result->fetch_assoc()) { 
		$users[] = $row;
	}
	//foreach ($categories as $item){
    // echo "<pre>";
    //      print_r($item);
    // echo "</pre>";
	//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USERS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="users_add.php" class="btn btn-primary">Add New Users</a>
        <p><?php echo (isset($_COOKIE['cate_add_msg'])?$_COOKIE['cate_add_msg']:'')?></p>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Action</th>
            </thead>
            <?php foreach ($users as $cate) { ?>
	            <tr>
	                <td><?= $cate['id']  ?></td>
	                <td><?= $cate['name'] ?></td>
	                <td><?= $cate['email']; ?> </td>	                
	                <td><img src="<?= $cate['avatar'] ?>" width="100px" height="100px"></td> 
	                <td>
	                    <a href="users_detail.php?id=<?= $cate['id']  ?>" class="btn btn-primary">Detail</a>
	                    <a href="users_edit.php?id=<?= $cate['id']  ?>" class="btn btn-success">Edit</a>
	                    <a href="users_delete.php?id=<?= $cate['id']  ?>" class="btn btn-danger">Delete</a>
	                </td>
	            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>