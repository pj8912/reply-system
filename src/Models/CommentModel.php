<?php

namespace Reply\Models;

class CommentModel{

	private $conn;
	public function __construct($db){ 
		$this->conn = $db;
	}
	
	private $table="comments";

	public $cid, $pid, $body;

	public function createComment(){

		$sql = "INSERT INTO {$this->table}(pid, body) VALUES(:pid, :body)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':pid', $this->pid, PDO::PARAM_INT);
		$stmt->bindParam(':body', $this->body, PDO::PARAM_STR);
		if($stmt->execute()){
			return true;
		}
		return false;

	}

	public function fetchComments(){

		$sql = "SELECT * FROM {$this->table}";
		$stmt = $this->conn->prepare($sql);
		if($stmt->execute()){
			return $stmt->execute();
		}
		return false;
	}




}
