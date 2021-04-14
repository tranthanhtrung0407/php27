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
		<li><h2>ID: <?= $category['id'] ?></h2></li>
		<li><h2>Name: <?= $category['name'] ?></h2></li>
		<li><h2>Thumbnail: <?= $category['thumbnail'] ?></h2></li>
		<li><h2>Description: <?= $category['description'] ?></h2></li>
		<li><h2>Slug: <?= $category['slug'] ?></h2></li>
	</ul>
</body>
</html>