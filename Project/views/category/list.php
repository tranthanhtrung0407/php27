<?php require_once('header.php'); ?>
    <div class="main-content container-fluid">
        <h3 class="text-center">One Piece quản lý Danh mục</h3>
        <p><?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'')?></p>
        <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Thumbnail</th>
                                        <th>Description</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($categories as $cate) { ?>
                                    <tr>
                                        <td><?= $cate['id']  ?></td>
                                        <td><?= $cate['name'] ?></td>
                                        <td><img src="<?= "uploads/".$cate['thumbnail'] ?>" width="60px" height="60px"></td> 
                                        <td><?= $cate['description']; ?> </td> 
                                        <td><?= $cate['slug']; ?> </td>      
                                        <td>
                                            <a href="?admin=admin&mod=category&act=detail&id=<?= $cate['id']  ?>" class="badge bg-primary"><i data-feather="eye" width="18"></i></a>
                                            <a href="?admin=admin&mod=category&act=edit&id=<?= $cate['id']  ?>" class="badge bg-success"><i data-feather="edit" width="18"></i></a>
                                            <a href="?admin=admin&mod=category&act=destroy&id=<?= $cate['id']  ?>" class="badge bg-danger"><i data-feather="trash-2" width="18"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>

<?php require_once('footer.php'); ?>