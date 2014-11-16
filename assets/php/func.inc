<?php

class progDB {
	private $id;
	private $sqlpath;
	function __construct($connect = true) {
		$this->results = array();
		$this->sqlpath = $_SERVER['DOCUMENT_ROOT']."../db/program.sqlite3";

		if (!file_exists($_SERVER['DOCUMENT_ROOT']."../db/program.sqlite3"))
			throw new Exception('SQLite Error: FIle was not found.');

		if($connect) {
			$this->connect();
		}
	}

	function __destruct() {
		$this->db = NULL;
	}

	function connect() {
		try {
			$this->db = new PDO('sqlite:'.$this->sqlpath);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			throw new Exception('Sqlite Error: '.$e->getMessage());
		}
	}

	public function setId($inputId) {
		$this->id = $inputId;
	}

	public function getId() {
		return $this->id;
	}

	public function userExists() {
		$query = $this->db->prepare('SELECT * FROM users WHERE id=:uid');
		$query->bindParam(':uid',$this->id,PDO::PARAM_INT);
		$query->execute();
		$response = $query->fetch(PDO::FETCH_ASSOC);
		if($response['id'])
			return true;
		else
			return false;
	}

	public function getUserInfo() {
		$query = $this->db->prepare('SELECT * FROM users WHERE id=:uid');
		$query->bindParam(':uid',$this->id,PDO::PARAM_INT);
		$query->execute();
		$response = $query->fetch(PDO::FETCH_ASSOC);
		return $response;
	}

	public function getBrandInformation() {
		$query = $this->db->prepare('SELECT * FROM brands WHERE EXISTS (SELECT * FROM users WHERE brands.id = users.brand AND id=:uid)');
		$query->bindParam(':uid',$this->id,PDO::PARAM_INT);
		$query->execute();
		$response = $query->fetch(PDO::FETCH_ASSOC);
		return $response;
	}
}

class proLogin {
	private $email;
	private $sqlpath = $_SERVER['DOCUMENT_ROOT']."../db/program.sqlite3";
	function __construct($connect = true) {
		$this->results = array();

		if (!file_exists($_SERVER['DOCUMENT_ROOT']."../db/program.sqlite3"))
			throw new Exception('SQLite Error: FIle was not found.');

		if($connect) {
			$this->connect();
		}
	}

	function __destruct() {
		$this->db = NULL;
	}

	function connect() {
		try {
			$this->db = new PDO('sqlite:'.$this->sqlpath);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			throw new Exception('Sqlite Error: '.$e->getMessage());
		}
	}

	public function setId($inputEmail) {
		$this->email = $inputEmail;
	}

	public function getUserInfo() { #return response or null dependent of record exist
		$query = $this->db->prepare('SELECT * FROM users WHERE email=:email');
		$query->bindParam(':email',$this->email,PDO::PARAM_STR);
		$query->execute();
		$response = $query->fetch(PDO::FETCH_ASSOC);
		if($response['email']) {
			return $response;
		}
		else
			return NULL;
	}
}
?>