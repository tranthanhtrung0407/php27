<?php 
	require_once('connection.php');
	class User{
		var $connection;
		function __construct(){
			$connection_obj=new Connection();
			$this->connection=$connection_obj->conn;
		}

		function all(){
			// Thực thi câu lệnh
			$sql = "SELECT * FROM users";
			$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
			$users = array();

			while($row = $result->fetch_assoc()) { 
				$users[] = $row;
			}
			return $users;
		}
		function find($id){
			$sql = "SELECT * FROM users WHERE id=".$id;

			return $this->connection->query($sql)->fetch_assoc();
		}
	}
 ?>