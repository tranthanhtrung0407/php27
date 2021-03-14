<?php
	$a=1;
	$b=4;
	$c=2;
	
	if ($a==0) {
		if ($b==0) {
			if ($c==0) {
				echo "Phương trình có vô số nghiệm";
			} else {
				echo "Phương trình vô nghiệm";
			}
		}else{
			echo "Phương trình có nghiệm x= "(-$c/$b);
		}
	}else{
		//tinh delta
		$delta=$b*$b-4*$a*$c;
		$x1="";
		$x2="";
		$x3="";
		if ($delta>0) {
			$x1=(-$b+sqrt($delta))/(2*$a);
			$x2=(-$b-sqrt($delta))/(2*$a);
			echo "Phương trình có 2 nghiệm là: "."x1= ".$x1." và x2= ".$x2;
		} else if ($delta==0) {
			$x3=(-$b/(2*$a));
			echo "Phương trình có nghiệm kép: x1=x2= ".$x3;	
		} else {
			echo "Phương trình vô nghiệm";
		}
	}
?>