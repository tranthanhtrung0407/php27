<?php 
	$arr = array(1,4,2,6,9,100,4);
	echo "Mảng sau khi đảo: ";
	$dao_mang = array_reverse($arr);
	for ($i=0; $i < count($dao_mang) ; $i++) { 
		echo $dao_mang[$i]."\t";
	}
 ?>