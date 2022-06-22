<?php
 
class Database{
	
	private $connection;
 
	function __construct()
	{
		$this->connect_db();
	}
 
	public function connect_db(){
		$this->connection = mysqli_connect('localhost:3306','root','','demo1');
	
		if(mysqli_connect_error()){
			die("<hr> <br>Database Connection Failed<br>" . mysqli_connect_error() ."<br>". mysqli_connect_errno());
		}
	}
 
	public function create($name,$email, $address,$city){
		$sql = "INSERT INTO `place_order` (Cname, email_id, Caddress, city) VALUES ('$name', '$email', '$address', '$city')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			die("err".mysqli_error($this->connection));
			return false;
		}
	}
 
	public function read($id=null){
		$sql = "SELECT * FROM `place_order`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
 
	public function update($name,$email, $address,$city, $id){
		$sql = "UPDATE `place_order` SET Cname='$name', email_id='$email', Caddress='$address', city='$city' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
 
	public function delete($id){
		$sql = "DELETE FROM `place_order` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}
 
	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}
 
}
 
$database = new Database();
 
?>