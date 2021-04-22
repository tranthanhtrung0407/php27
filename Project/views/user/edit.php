<?php require_once('header.php'); ?>
    <h3 align="center">One Piece - Chỉnh sửa Bài viết</h3>
    <hr>
    <div class="main-content container-fluid">
        <form action="?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $user['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $user['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $user['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                 <input type="file" name="avatar" class="form-control" value="<?= $cate['avatar'] ?>">
            </div>
            <button type="submit" class="badge bg-primary">Update</button>
        </form>
    </div>

<?php require_once('footer.php'); ?>