<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="index.php?mod=post&act=create" class="btn btn-primary">Add New Posts</a>
        <p><?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'')?></p>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                
                <th>Description</th>
                <th>Thumbnail</th>
                <th>Content</th>
                <th>Slug</th>
                <th>Action</th>
            </thead>
            <?php foreach ($posts as $cate) { ?>
	            <tr>
	                <td><?= $cate['id']  ?></td>
	                <td><?= $cate['title'] ?></td>
	                <td><?= $cate['description']; ?> </td>
	                <td><img src="<?= $cate['thumbnail'] ?>" width="100px" height="100px"></td> 
	                <td><?= $cate['content']; ?> </td> 
	                <td><?= $cate['slug']; ?> </td>     
	                <td>
	                    <a href="index.php?mod=post&act=detail&id=<?= $cate['id']  ?>" class="btn btn-primary">Detail</a>
	                    <a href="index.php?mod=post&act=edit&id=<?= $cate['id']  ?>" class="btn btn-success">Edit</a>
	                    <a href="index.php?mod=post&act=destroy&id=<?= $cate['id']  ?>" class="btn btn-danger">Delete</a>
	                </td>
	            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>