<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 style="text-align: center;">--- THÔNG TIN CHI TIẾT ---</h1>
	<ul>
		<li><h2>ID: <?= $post['id'] ?></h2></li>
		<li><h2>Title: <?= $post['title'] ?></h2></li>
		<li><h2>Description: <?= $post['description'] ?></h2></li>
		<li><h2>Thumbnail: <?= $post['thumbnail'] ?></h2></li>
		<li><h2>Content: <?= $post['content'] ?></h2></li>
		<li><h2>Slug: <?= $post['slug'] ?></h2></li>
	</ul>
</body>
</html>