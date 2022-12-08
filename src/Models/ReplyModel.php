<?php


namespace Reply\Models;


class ReplyModel{

	private $conn;
	public function __construct($db){ 
		$this->conn = $db;
	}
	
	public $cid, $body;

	public function createReply(){
		$sql = "INSERT INTO{$this->table}(cid, body) VALUES(:cid, :body)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':cid', $this->cid, PDO::PARAM_INT);
		$stmt->bindParam(':body', $this->body, PDO::PARAM_STR);
		if($stmt->execute()){
			return true;
		}
		return false;
	}

	public function getReplies(){
		$sql = "SELECT * FROM {$this->table}";
		$stmt = $this->conn->query($sql);
		if($stmt->execute()){
			return $stmt;
		}
		return false;
	
	}
	
}
