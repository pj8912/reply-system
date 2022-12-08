<?php

namespace Reply\Models;

class CommentModel{

	private $conn;
	public function __construct($db){ 
		$this->conn = $db;
	}
	
	private $table;


}
