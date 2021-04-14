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
		function create(){
			require_once('views/post/create.php');
		}
		function store(){
			$data=$_POST;
			$modelPost=new Post();
			$success=$modelPost->create($data);

			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới thất bại!',time()+5);
			}
			header("location:index.php?mod=post&act=list");

		}

		function edit(){
			$id=$_GET['id'];
			$model=new Post();
			$post =$model->find($id);
			require_once('views/post/edit.php');
		}
		function update(){
			$data=$_POST;
			$modelPost=new Post();
			$success=$modelPost->update($data);

			if ($success) {
				setcookie('success','Cập nhật thành công!',time()+5);
			} else {
				setcookie('error','Cập nhật thất bại!',time()+5);
			}
			header("location:index.php?mod=post&act=list");

		}
		function destroy(){
			$id=$_GET['id'];
			$modelPost=new Post();
			$success=$modelPost->destroy($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa thất bại!',time()+5);
			}
			header("location:index.php?mod=post&act=list");

		}
	}
 ?>