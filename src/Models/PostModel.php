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

	public function createPost(){

		$sql = "INSERT INTO {$this->table}(title, body, created_at ) VALUES(:title, :body, :created_at)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':title', $this->title, PDO::PARAM_STRING);
		$stmt->bindParam(':body', $this->body, PDO::PARAM_STRING);
		$stmt->bindParam(':created_at', 'NOW()');
		if($stmt->execute()){
			return true;
		}
		return false;
	}


	public function getAllPosts(){

		$sql = "SELECT title, body, created_at, updated_at FROM {$this->table}";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':pid', $this->post_id, PDO::PARAM_INT);
		if($stmt->execute()){
			return $stmt;
		}
		return false;
	}

	public static function postTest(){
		return "post working";
	}


}



