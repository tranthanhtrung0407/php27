<?php
	$name="  trầN  tHị  thANh TrUNg    ";
	echo "Tên ban đầu:".$name."<br>";
	$xoa_trang=trim($name);
	$chu_thuong=strtolower($xoa_trang);
	$names=ucwords($chu_thuong);
	echo "Tên sau khi chuẩn hóa: ".$names;
?>