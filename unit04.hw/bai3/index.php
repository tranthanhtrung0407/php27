<?php 
	session_start();
	if (isset($_SESSION)) {
		$data_arr=$_SESSION;
	}
	
 ?>



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
 		<a href="upload.php" class="btn btn-success" title="">Upload Document</a>
 		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Downloads</th>      
					<th>#</th>
				</tr>
			</thead>
				<tbody>
					<?php 
						$i=0;
						foreach ($data_arr as $key) { 	
							$i++;
					?>				 
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $key['name'] ?></td>
							<td>
								<a href="<?= 'upload/'.$key['download']; ?>" title="" download="<?php echo $key['download']; ?>"><button type="button" class="btn btn-primary">Download</button></a>
							</td>
							<td>
								<a href="remove.php?name=<?php echo $key['name']; ?>" title=""><button type="button" class="btn btn-danger">Remove</button></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
 	</div>
</body>
</html>