<?php 
	include 'data.php';
	session_start();
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
		<h4>
			THÔNG TIN SẢN PHẨM
		</h4>
		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Giá tiền</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $key => $row) {
						
					 ?>
					<tr>
						<td><?php echo $row['MSP'] ?></td>
						<td><?php echo $row['tenSP'] ?></td>
						<td><?php echo $row['donGia'] ?></td>
						
						<td>
							<a href="addToCart.php?msp=<?php echo $key ?>" title=""><button type="button" class="btn btn-primary">Add to card</button></a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>