<?php require_once('header.php'); ?>
     <div class="main-content container-fluid">
        <h3 class="text-center">One Piece quản lý Bài viết</h3>
        <p><?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'')?></p>
        <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <th>ID</th>
                                    <th>Title</th>
                                    
                                    <th>Description</th>
                                    <th>Thumbnail</th>
                                   
                                    <th>Content</th>
                                    <th>Action</th>
                                </thead>
                                <?php foreach ($posts as $cate) { ?>
                    	            <tr>
                    	                <td><?= $cate['id']  ?></td>
                    	                <td><?= $cate['title'] ?></td>
                    	                <td><?= $cate['description']; ?> </td>
                    	                <td><img src="<?= "uploads/".$cate['thumbnail'] ?>" width="60px" height="60px"></td> 
                    	              
                    	                <td><?= $cate['content']; ?> </td>     
                    	                <td>
                    	                    <a href="?admin=admin&mod=post&act=detail&id=<?= $cate['id']  ?>" class="badge bg-primary"><i data-feather="eye" width="18"></i></a>
                    	                    <a href="?admin=admin&mod=post&act=edit&id=<?= $cate['id']  ?>" class="badge bg-success"><i data-feather="edit" width="18"></i></a>
                    	                    <a href="?admin=admin&mod=post&act=destroy&id=<?= $cate['id']  ?>" class="badge bg-danger"><i data-feather="trash-2" width="18"></i></a>
                    	                </td>
                    	            </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>

<?php require_once('footer.php'); ?>