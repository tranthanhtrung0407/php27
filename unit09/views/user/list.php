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
	                    <a href="index.php?mod=user&act=detail&id=<?= $cate['id']  ?>" class="btn btn-primary">Detail</a>
	                    <a href="users_edit.php?id=<?= $cate['id']  ?>" class="btn btn-success">Edit</a>
	                    <a href="users_delete.php?id=<?= $cate['id']  ?>" class="btn btn-danger">Delete</a>
	                </td>
	            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>