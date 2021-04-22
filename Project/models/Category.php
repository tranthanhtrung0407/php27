<?php 
	require_once('Model.php');

	class Category extends Model{
		var $table='categories';

		function get3Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id ASC LIMIT 2 ";
			$result = $this->connection->query($sql);
	
			$threeCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$threeCategorys[] = $row;
			}
			return $threeCategorys;
		}
		function get1Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 1 ";
			$result = $this->connection->query($sql);
	
			$tCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$tCategorys[] = $row;
			}
			return $tCategorys;
		}
		function get2Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 4,1 ";
			$result = $this->connection->query($sql);
	
			$trCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$trCategorys[] = $row;
			}
			return $trCategorys;
		}
		function get4Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 5,1 ";
			$result = $this->connection->query($sql);
	
			$truCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$truCategorys[] = $row;
			}
			return $truCategorys;
		}
		function get5Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 6,1 ";
			$result = $this->connection->query($sql);
	
			$trunCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$trunCategorys[] = $row;
			}
			return $trunCategorys;
		}
		function get6Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 4 ";
			$result = $this->connection->query($sql);
	
			$trungCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$trungCategorys[] = $row;
			}
			return $trungCategorys;
		}
		function get7Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 1,8 ";
			$result = $this->connection->query($sql);
	
			$trunggCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$trunggCategorys[] = $row;
			}
			return $trunggCategorys;
		}		
		function get9Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 4 ";
			$result = $this->connection->query($sql);
	
			$trunggggCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$trunggggCategorys[] = $row;
			}
			return $trunggggCategorys;
		}
		function get8Categoris(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 6 ";
			$result = $this->connection->query($sql);
	
			$trungggCategorys = array();

			while($row = $result->fetch_assoc()) { 
				$trungggCategorys[] = $row;
			}
			return $trungggCategorys;
		}

	}
	
 ?>