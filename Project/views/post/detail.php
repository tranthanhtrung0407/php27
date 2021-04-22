<?php require_once('header.php'); ?>

	<div class="main-content container-fluid">
		<h2 style="text-align: center;">One Piece - Thông tin chi tiết</h2>
		<ul>
			<li><h3>ID: <?= $post['id'] ?></h3></li>
			<li><h3>Title: <?= $post['title'] ?></h3></li>
			<li><h3>Description: <?= $post['description'] ?></h3></li>
			<li><h3>Thumbnail: <?= $post['thumbnail'] ?></h3></li>
			<li><h3>Content: <?= $post['content'] ?></h3></li>
			<li><h3>Slug: <?= $post['slug'] ?></h3></li>
		</ul>
	</div>

<?php require_once('footer.php'); ?>