<?php 
	require_once('Model.php');

	class User extends Model{
		var $table='users';

		function get1Users(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id ASC LIMIT 1 ";
			$result = $this->connection->query($sql);
	
			$oneUsers = array();

			while($row = $result->fetch_assoc()) { 
				$oneUsers[] = $row;
			}
			return $oneUsers;
		}

	}
	
 ?>