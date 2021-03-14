<?php
	$name=array('Trần',19,'Trung','Vĩnh Phúc',2001);
	var_dump($name);
	echo "<pre>";
	print_r($name);
	echo "</pre>";



	$name_trung=array();
	$name_trung['name']='Trung';
	$name_trung['age']=19;
	$name_trung['hometown']='Vĩnh Phúc';
	echo "<br> Tên:".$name_trung['name'];
	echo "<br> Tuổi:".$name_trung['age'];
	echo "<br> Quê quán:".$name_trung['hometown'];
	///echo "<pre>";
	//print_r($name_trung);
	//echo "</pre>";




//vòng lặp foreach
	foreach ($name_trung as $key => $value) {
		echo "<br>Key: ".$key."- value: ".$value;
	}

	foreach ($name_trung as $key) {
		echo "<br>Key: ".$key;
	}
?>