<?php require_once('header.php'); ?>

	<div class="main-content container-fluid">
		<h2 style="text-align: center;">One Piece - Thông tin chi tiết</h2>
		<ul>
			<li><h3>ID: <?= $user['id'] ?></h3></li>
			<li><h3>Name: <?= $user['name'] ?></h3></li>
			<li><h3>Email: <?= $user['email'] ?></h3></li>
			<li><h3>Avatar: <?= $user['avatar'] ?></h3></li>
		</ul>
	</div>

<?php require_once('footer.php'); ?>