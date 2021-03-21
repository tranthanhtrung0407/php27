<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="upload_process.php" method="POST" role="form" enctype="multipart/form-data">
			<legend>Upload Document</legend>

			<div class="form-group">
				<label>Tên tài liệu</label>
				<input type="text" class="form-control" name="name">
                <label for="">Image</label>
                <input type="file" class="form-control" name="file_anh">
            </div>
            <button  type="submit" class="btn btn-primary">Upload</button>

		</form>


	</div>
</body>
</html>