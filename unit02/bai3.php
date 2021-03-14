<?php 
	$number1=10;
	ktchan_le($number1);
	$number2=11;
	ktchan_le($number2);
	function ktchan_le($number){
		if ($number%2==0) {
			echo "<br>Số chẵn";
		} else {
			echo "<br>Số lẻ";
		}
		
	}


	

	function tinhtong($input){
		$sum=0;
		foreach ($input as $value) {
			$sum+=$value;
		}
		return $sum;
	}
	$arr=array(1,2,3,4,5);
	echo "<br> Tổng của mảng = ".tinhtong($arr);
 ?>