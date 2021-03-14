<?php 
	function kiem_tra($string){
		if ($string==strrev($string)) 
			echo "Chuỗi nhập vào là chuỗi Palindrome";
		 else 
			echo "Chuỗi nhập vào không phải chuỗi Palindrome";		
	}
	echo kiem_tra('toot')."<br>";

 ?>