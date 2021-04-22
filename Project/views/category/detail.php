<?php require_once('header.php'); ?>

	<div class="main-content container-fluid">
		<h2 style="text-align: center;">One Piece - Thông tin chi tiết</h2>
		<ul>
			<li><h3>ID: <?= $category['id'] ?></h3></li>
			<li><h3>Name: <?= $category['name'] ?></h3></li>
			<li><h3>Thumbnail: <?= $category['thumbnail'] ?></h3></li>
			<li><h3>Description: <?= $category['description'] ?></h3></li>
			<li><h3>Slug: <?= $category['slug'] ?></h3></li>
		</ul>
	</div>

<?php require_once('footer.php'); ?>
