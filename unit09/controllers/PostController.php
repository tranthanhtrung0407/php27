<?php 
	require_once('models/Post.php');
	class PostController{
		function __construct(){

		}
		function list(){
			$model=new Post();
			$posts =$model->all();

			require_once('views/post/list.php');
		}

		function detail(){
			$model=new Post();
			$id=$_GET['id'];
			$post =$model->find($id);

			require_once('views/post/detail.php');
		}
		function add(){
			echo "<br>Form them moi post";
		}
		function add_process(){
			echo "<br>process them moi post";
		}
		function edit(){
			echo "<br>Sua post";
		}
		function delete(){
			echo "<br>Xoa post";
		}
	}
 ?>