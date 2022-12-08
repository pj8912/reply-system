<?php

namespace Reply\Database;

class Database{
	private $conn = null;
	private $host ="localhost";
	private $uname = "root";
	private $pwd = "";
	private $dbname = "reply-system";

	public function connect(){
		try{
			$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$thi->dbname, $this->uname, $this->pwd);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}

		catch(PDOException $e){
			echo "DB_ERR:".$e->getMessage();
		}

		return $this->conn;
	}
}


