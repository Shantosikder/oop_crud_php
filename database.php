<?php

class database{

	private $connection;

	public function __construct(){
		$this->db_con();
	}

	public function db_con(){
		$this->connection = mysqli_connect('localhost','root','','laravel_oop_crud');
		if(mysqli_connect_error()){
			die("Database connection Error".mysqli_connect_error().mysqli_connect_error());
		}
	}
	public function selectAll(){
		$sql = "SELECT * FROM student";
		$result = mysqli_query($this->connection,$sql);
		return $result;	
	}

	public function insert($first,$last,$gender,$age,$email){
	$sql = "INSERT INTO student VALUES(NULL,'$first','$last','$gender','$age','$email')";
	$result = mysqli_query($this->connection, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

	}

	public function update(){
		
	}

	public function delete(){
		
	}

}

$db = new database;
$db->db_con();


 ?>