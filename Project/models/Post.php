<?php 
	require_once('Model.php');

	class Post extends Model{
		var $table='posts';

		function get3Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id ASC LIMIT 3 ";
			$result = $this->connection->query($sql);
	
			$threePosts = array();

			while($row = $result->fetch_assoc()) { 
				$threePosts[] = $row;
			}
			return $threePosts;
		}
		function get6Posts(){
			$sql = "SELECT * FROM ".$this->table." WHERE view_count >300 ";
			$result = $this->connection->query($sql);
	
			$sixPosts = array();

			while($row = $result->fetch_assoc()) { 
				$sixPosts[] = $row;
			}
			return $sixPosts;
		}
		function get1Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY view_count DESC LIMIT 1 ";
			$result = $this->connection->query($sql);
	
			$onePosts = array();

			while($row = $result->fetch_assoc()) { 
				$onePosts[] = $row;
			}
			return $onePosts;
		}
		function get90Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC ";
			$result = $this->connection->query($sql);
	
			$trtPosts = array();

			while($row = $result->fetch_assoc()) { 
				$trtPosts[] = $row;
			}
			return $trtPosts;
		}
		function get66Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 6 ";
			$result = $this->connection->query($sql);
	
			$tttPosts = array();

			while($row = $result->fetch_assoc()) { 
				$tttPosts[] = $row;
			}
			return $tttPosts;
		}
		function get67Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 5 ";
			$result = $this->connection->query($sql);
	
			$ttPosts = array();

			while($row = $result->fetch_assoc()) { 
				$ttPosts[] = $row;
			}
			return $ttPosts;
		}
		function get68Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY view_count DESC LIMIT 8 ";
			$result = $this->connection->query($sql);
	
			$ttttPosts = array();

			while($row = $result->fetch_assoc()) { 
				$ttttPosts[] = $row;
			}
			return $ttttPosts;
		}
		function get69Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY view_count DESC LIMIT 8 ";
			$result = $this->connection->query($sql);
	
			$trPosts = array();

			while($row = $result->fetch_assoc()) { 
				$trPosts[] = $row;
			}
			return $trPosts;
		}
		function get70Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 1 ";
			$result = $this->connection->query($sql);
	
			$truPosts = array();

			while($row = $result->fetch_assoc()) { 
				$truPosts[] = $row;
			}
			return $truPosts;
		}
		function get71Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 1,2 ";
			$result = $this->connection->query($sql);
	
			$trunPosts = array();

			while($row = $result->fetch_assoc()) { 
				$trunPosts[] = $row;
			}
			return $trunPosts;
		}
		function get72Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 4,1 ";
			$result = $this->connection->query($sql);
	
			$trungPosts = array();

			while($row = $result->fetch_assoc()) { 
				$trungPosts[] = $row;
			}
			return $trungPosts;
		}
		function get73Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 5,1 ";
			$result = $this->connection->query($sql);
	
			$trunggPosts = array();

			while($row = $result->fetch_assoc()) { 
				$trunggPosts[] = $row;
			}
			return $trunggPosts;
		}
		function get74Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 6,1 ";
			$result = $this->connection->query($sql);
	
			$trungggPosts = array();

			while($row = $result->fetch_assoc()) { 
				$trungggPosts[] = $row;
			}
			return $trungggPosts;
		}
		function get75Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 4 ";
			$result = $this->connection->query($sql);
	
			$trePosts = array();

			while($row = $result->fetch_assoc()) { 
				$trePosts[] = $row;
			}
			return $trePosts;
		}
		function get79Posts(){
			$sql = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 7,1 ";
			$result = $this->connection->query($sql);
	
			$toPosts = array();

			while($row = $result->fetch_assoc()) { 
				$toPosts[] = $row;
			}
			return $toPosts;
		}


	}
	
 ?>