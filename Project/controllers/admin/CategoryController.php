<?php 
	require_once('models/Category.php');
	require_once('BaseController.php');
	class CategoryController extends BaseController{
		var $model;
		function __construct(){
			parent::__construct();
			$this->model=new Category();
		}
		function list(){
			
			$categories =$this->model->all();

			require_once('views/category/list.php');
		}
		function detail(){

			$id=$_GET['id'];
			$category =$this->model->find($id);

			require_once('views/category/detail.php');
		}
		function create(){
			require_once('views/category/create.php');
		}
		function store(){
			$data=$_POST;

			$data['thumbnail']="/".$_FILES["thumbnail"]["name"];
			$target_file = "uploads/" . basename($_FILES["thumbnail"]["name"]);
    		move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

			$success=$this->model->create($data);

			if ($success) {
				setcookie('success','Thêm mới thành công!',time()+5);
			} else {
				setcookie('error','Thêm mới thất bại!',time()+5);
			}
			$this->redirect('?admin=admin&mod=category&act=list');

		}
		function edit(){
			$id=$_GET['id'];
			
			$category =$this->model->find($id);
			require_once('views/category/edit.php');
		}
		function update(){
			$data=$_POST;
			$data['thumbnail']="/".$_FILES["thumbnail"]["name"];
			$target_file = "uploads/" . basename($_FILES["thumbnail"]["name"]);
		    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
		    
			$success=$this->model->update($data);

			if ($success) {
				setcookie('success','Cập nhật thành công!',time()+5);
			} else {
				setcookie('error','Cập nhật thất bại!',time()+5);
			}
			$this->redirect('?admin=admin&mod=category&act=list');
		}
		function destroy(){
			$id=$_GET['id'];
			$success=$this->model->destroy($id);

			if ($success) {
				setcookie('success','Xóa thành công!',time()+5);
			} else {
				setcookie('error','Xóa thất bại!',time()+5);
			}
			$this->redirect('?admin=admin&mod=category&act=list');

		}
	}
 ?>