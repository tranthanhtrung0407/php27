<?php 
	class category{
		var $name;
		var $slug;
		var $parent_id;
		var $thumbnail;
		var $description;

		function ttCategory(){
			echo "Hiển thị thông tin!!!";
        	echo "<br>Tên: $this->name";
        	echo "<br>Đường dẫn: $this->slug";
        	echo "<br>Danh mục cha: $this->parent_id";
        	echo "<br>Ảnh hiển thị: $this->thumbnail";
        	echo "<br>Mô tả: $this->description";
        }
   	}
	$categories = new category();

	$categories->name='Thiên nhiên';
	$categories->slug='thien-nhien';
	$categories->parent_id='2';
	$categories->thumbnail='anh_thien_nhien.jpg';
	$categories->description='khung cảnh rực rỡ lúc bình minh';

	$categories->ttCategory();

 ?>