<?php
	$n=7;
	$tong=0;
	$giaithua=1;
	for ($i=1; $i <=$n; $i++) { 
		$giaithua*=$i;
		$tong+=$i/$giaithua;
	}
	echo "Tổng của dãy số là: ".$tong ;
?>