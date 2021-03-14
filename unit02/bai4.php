<?php 
	$name=array('Nam','Khánh',"Bình");

	var_dump(in_array('Khánh', $name));
	echo "Số lượng phần tử trong mảng: ".count($name);


	$index = array_search('Hậu', $name);    
     
     if($index !== FALSE){
         echo "Vị trí phần tử là: " . $index;
     }else{
         echo "Không tìm thấy phần tử";
     }
 ?>