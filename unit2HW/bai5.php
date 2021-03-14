<?php
 	$name ="Trần Thị Thanh Trung";
 	echo "Tên ban đầu là : ".$name."<br>";
	$cat_chuoi = explode(" ",$name);
	$dem ="";
	for ($i=1; $i < (count($cat_chuoi)-1) ; $i++) { 
		$dem = $dem.$cat_chuoi[$i]." ";
	}
	
	echo "Họ : ".$cat_chuoi[0]."<br>";
	echo "Tên đệm : ".$dem."<br>";
	echo "Tên : ".$cat_chuoi[count($cat_chuoi)-1]."<br>";
?>