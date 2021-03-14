<?php
	$a=0;
	$b=1;
	if ($a!=0) {
		$kq=-$b/$a;
		echo'Phương trình: '.$a.'x+'.$b.' =0'."<br/>";
		echo 'Kết quả: x= '.$kq;
	} else {
		if ($b==0) {
			echo "Phương trình có vô số nghiệm ";
		} else {
			echo "Phương trình vô nghiệm";
		}
		
	}
	
?>