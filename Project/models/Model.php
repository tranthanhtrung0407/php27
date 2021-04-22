<?php 
	require_once('connection.php');
	class Model{
		var $table;
		var $connection;

		function __construct(){
			$connection_obj=new Connection();
			$this->connection=$connection_obj->conn;
		}
		function all(){
			// Thực thi câu lệnh
			$sql = "SELECT * FROM ".$this->table;

			$result = $this->connection->query($sql);

			// Tạo 1 mảng để chứa dữ liệu
			$categories = array();

			while($row = $result->fetch_assoc()) { 
				$categories[] = $row;
			}
			return $categories;
		}
		function find($id){
			$sql = "SELECT * FROM ".$this->table." WHERE id=".$id;
			return $this->connection->query($sql)->fetch_assoc();
		}
		function destroy($id){
			$query="DELETE FROM ".$this->table." WHERE id=".$id;

			return $this->connection->query($query);
		}
		function create($data){
			$columns='';
			$values='';
			foreach ($data as $key => $value) {
				$columns .=$key.',';
				$values .="'".$value."',";
			}
			$columns= trim($columns,',');
			$values= trim($values,',');

			$query="INSERT INTO ".$this->table." (".$columns.") VALUES(".$values.")";

			return $this->connection->query($query);
		}
		function update($data){
			$values='';
			foreach ($data as $key => $value) {
				$values .=$key."='".$value."',";
			}
			$values= trim($values,',');

			$query="UPDATE ".$this->table." SET ".$values." WHERE id=".$data['id'];

			return $this->connection->query($query);
		}
	}
 ?>