<?php require_once('header.php'); ?>
    <h3 align="center">One Piece - Chỉnh sửa Bài viết</h3>
    <hr>
    <div class="main-content container-fluid">
        <form action="?admin=admin&mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $post['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $post['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" value="<?= $cate['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $post['content'] ?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $post['slug'] ?>">
            </div>
            <button type="submit" class="badge bg-primary">Update</button>
        </form>
    </div>

<?php require_once('footer.php'); ?>