<?php 
	$arr = array(1,4,2,6,9,100,4);
	sort($arr);
	echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: ";
	foreach ($arr as $key) {
		echo "$key"."\t";
	}
?>