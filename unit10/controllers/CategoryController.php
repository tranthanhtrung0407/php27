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
		function create(){
			require_once('views/category/create.php');
		}
		function store(){
			$data=$_POST;
			$modelCategory=new Category();
			$success=$modelCategory->create($data);

			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới thất bại!',time()+5);
			}
			header("location:index.php?mod=category&act=list");

		}


		function edit(){
			$id=$_GET['id'];
			$model=new Category();
			$category =$model->find($id);
			require_once('views/category/edit.php');
		}
		function update(){
			$data=$_POST;
			$modelCategory=new Category();
			$success=$modelCategory->update($data);

			if ($success) {
				setcookie('success','Cập nhật thành công!',time()+5);
			} else {
				setcookie('error','Cập nhật thất bại!',time()+5);
			}
			header("location:index.php?mod=category&act=list");

		}
		function destroy(){
			$id=$_GET['id'];
			$modelCategory=new Category();
			$success=$modelCategory->destroy($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa thất bại!',time()+5);
			}
			header("location:index.php?mod=category&act=list");

		}
	}
 ?>