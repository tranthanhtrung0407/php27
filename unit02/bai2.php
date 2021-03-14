<?php 
	$infos=array();
	$infos[0]='Trung';
	$infos[1]='0394677654';
	$infos[2]=19;
	$infos[3]=array();
	$infos[3][0]=array('Trung đẹp trai');
	$infos[3][1]=array('Trần Thanh Trung');

	echo "<pre>";
		print_r($infos);
	echo "</pre>";

	echo "<hr> Mảng 3 chiều: ".$infos[3][1][0];
 ?>