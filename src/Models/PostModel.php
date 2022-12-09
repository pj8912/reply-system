<?php
namespace Reply\Models;

class PostModel {

	private $conn;
	public function __construct($db){
		$this->conn = $db;
	}

	public $title;

	public $body;

	public $post_id;


	private $table = "posts";

	public function createPost(){

		$sql = "INSERT INTO {$this->table}(title, body, created_at ) VALUES(:title, :body,NOW())";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':title', $this->title,\PDO::PARAM_STR);
		$stmt->bindParam(':body', $this->body, \PDO::PARAM_STR);
	
		if($stmt->execute()){
			return true;
		}
		return false;
	}


	public function getAllPosts(){

		$sql = "SELECT title, body, created_at, updated_at FROM {$this->table}";
		$stmt = $this->conn->query($sql);
		if($stmt->execute()){
			return $stmt;
		}
		return false;
	}

	public static function postTest(){
		return "post working";
	}


}



