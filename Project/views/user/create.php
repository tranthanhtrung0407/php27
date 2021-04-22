<?php require_once('header.php'); ?>

    <div class="main-content container-fluid">
        <h3 align="center">Anime One Piece - Thêm mới Người dùng</h3>
        <hr>
        <form action="?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>
            <button type="submit" class="badge bg-primary">Creat</button>
        </form>
    </div>

<?php require_once('footer.php'); ?>