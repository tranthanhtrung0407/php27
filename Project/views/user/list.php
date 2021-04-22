<?php require_once('header.php'); ?>
    <div class="main-content container-fluid">
       <h3 class="text-center">One Piece quản lý Người dùng</h3>
        <p><?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'')?></p>
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
	                <td><img src="<?= "uploads/".$cate['avatar'] ?>" width="60px" height="60px" ></td> 
	                <td>
	                    <a href="?admin=admin&mod=user&act=detail&id=<?= $cate['id']  ?>" class="badge bg-primary"><i data-feather="eye" width="18"></i></a>
	                    <a href="?admin=admin&mod=user&act=edit&id=<?= $cate['id']  ?>" class="badge bg-success"><i data-feather="edit" width="18"></i></a>
	                    <a href="?admin=admin&mod=user&act=destroy&id=<?= $cate['id']  ?>" class="badge bg-danger"><i data-feather="trash-2" width="18"></i></a>
	                </td>
	            </tr>
            <?php } ?>
        </table>
    </div>
<?php require_once('footer.php'); ?>