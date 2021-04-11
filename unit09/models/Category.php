<?php 
	require_once('connection.php');
	class Category{
		var $connection;
		function __construct(){
			$connection_obj=new Connection();
			$this->connection=$connection_obj->conn;
		}

		function all(){
			// Thực thi câu lệnh
			$sql = "SELECT * FROM categories";
			$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
			$categories = array();

			while($row = $result->fetch_assoc()) { 
				$categories[] = $row;
			}
			return $categories;
		}

		function find($id){
			$sql = "SELECT * FROM categories WHERE id=".$id;

			return $this->connection->query($sql)->fetch_assoc();
		}
	}
	//$category = new Category();
	//$categories=$category->all();	
 ?>