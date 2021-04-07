<?php 
	class post{
		var $title;
		var $slug;
		var $description;
		var $content;

		function ttPost(){
			echo "Hiển thị thông tin!!!";
        	echo "<br>Tiêu đề: $this->title";
        	echo "<br>Đường dẫn: $this->slug";
        	echo "<br>Mô tả: $this->description";
        	echo "<br>Nội dung: $this->content";
        }
   	}
	$posts = new post();

	$posts->title='Bầu trời đêm';
	$posts->slug='bau-troi-dem';
	$posts->description='Ngàn sao lấp lánh';
	$posts->content='Ngồi ngắm cảnh vật tĩnh lặng';

	$posts->ttPost();

 ?>