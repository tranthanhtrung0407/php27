<?php 
	session_start();
	$products_cart=$_SESSION['cart'];
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
		<a href="index.php" class="btn btn-success" title="">Quay lại thông tin sản phẩm</a>
		<h4>DANH SÁCH MẶT HÀNG</h4>
			<div class="container">
				<table class="table">
					<thead>
						<tr>
							<th>Mã sản phẩm</th>
							<th>Tên sản phẩm</th>
							<th>Giá tiền</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th>SUB/ADD</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $tong=0;foreach ($products_cart as $key => $row) { ?>					 
						<tr>
							<td><?php echo $row['MSP'] ?></td>
							<td><?php echo $row['tenSP'] ?></td>
							<td><?php echo $row['donGia'] ?></td>
							<td><?php echo $row['soLuong'] ?></td>
							<td><?php echo number_format($row['donGia']*$row['soLuong']) ?></td>

							<td>
								<a href="subtract.php?msp=<?php echo $key ?>" title=""><button type="button" class="btn btn-primary">Trừ</button></a>

								<a href="addToCart.php?msp=<?php echo $key ?>" title=""><button type="button" class="btn btn-primary">Thêm</button></a>
							</td>

							<td>
								<a href="delete.php?msp=<?php echo $key ?>" title=""><button type="button" class="btn btn-danger">Delete</button></a>
							</td>
						</tr>
					<?php 
						$tong+=$row['donGia']*$row['soLuong'];
					} ?>
					</tbody>
					
				</table>

				<footer>
					<p>Tổng tiền thanh toán:<strong style="margin-left: 268px;"><?php echo number_format($tong); ?></strong></p>
				</footer>

			</div>
	</div>
</body>
</html>