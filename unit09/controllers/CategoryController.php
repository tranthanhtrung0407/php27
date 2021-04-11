<?php 
	require_once('models/Category.php');
	class CategoryController{
		function __construct(){

		}
		function list(){
			$model=new Category();
			$categories =$model->all();

			require_once('views/category/list.php');
		}

		function detail(){
			$model=new Category();
			$id=$_GET['id'];
			$category =$model->find($id);

			require_once('views/category/detail.php');
		}

		function add(){
			echo "<br>Form them moi category";
		}
		function add_process(){
			echo "<br>process them moi category";
		}
		function edit(){
			echo "<br>Sua category";
		}
		function delete(){
			echo "<br>Xoa category";
		}
	}
 ?>