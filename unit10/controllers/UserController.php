<?php 
	require_once('models/User.php');
	class UserController{
		function __construct(){

		}
		function list(){
			$model=new User();
			$users =$model->all();

			require_once('views/user/list.php');
		}

		function detail(){
			$model=new User();
			$id=$_GET['id'];
			$user =$model->find($id);

			require_once('views/user/detail.php');
		}
		function create(){
			require_once('views/user/create.php');
		}
		function store(){
			$data=$_POST;
			$modelUser=new User();
			$success=$modelUser->create($data);

			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới thất bại!',time()+5);
			}
			header("location:index.php?mod=user&act=list");

		}
		function edit(){
			$id=$_GET['id'];
			$model=new User();
			$user =$model->find($id);
			require_once('views/user/edit.php');
		}
		function update(){
			$data=$_POST;
			$modelUser=new User();
			$success=$modelUser->update($data);

			if ($success) {
				setcookie('success','Cập nhật thành công!',time()+5);
			} else {
				setcookie('error','Cập nhật thất bại!',time()+5);
			}
			header("location:index.php?mod=user&act=list");

		}
		function destroy(){
			$id=$_GET['id'];
			$modelUser=new User();
			$success=$modelUser->destroy($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa thất bại!',time()+5);
			}
			header("location:index.php?mod=user&act=list");

		}
	}
 ?>