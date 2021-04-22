<?php require_once('header.php'); ?>
 <div class="main-content container-fluid">
    <h3 align="center">Anime One Piece - Thêm mới Bài viết</h3>
    <hr>
        <form action="?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug">
            </div>
            <button type="submit" class="badge bg-primary">Create</button>
        </form>
    </div>

<?php require_once('footer.php'); ?>