<?php
 
class Database{
	
	private $connection;
 
	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'demo1');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
}
 
$database = new Database();
$database->connect_db();
?>