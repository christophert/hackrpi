<?php
date_default_timezone_set('America/New_York');
class progDB {
	private $id;
	private $sqlpath;
	function __construct($connect = true) {
		$this->results = array();
		$this->sqlpath = $_SERVER['DOCUMENT_ROOT']."/../db/program.sqlite3";

		if (!file_exists($_SERVER['DOCUMENT_ROOT']."/../db/program.sqlite3"))
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

	public function getUserLog() {
		$query = $this->db->prepare('SELECT * FROM log WHERE EXISTS (SELECT * FROM USERS WHERE log.user = :uid) LIMIT 10');
		$query->bindParam(':uid',$this->id,PDO::PARAM_INT);
		if($query->execute()) {
			while($r = $query->fetch(PDO::FETCH_ASSOC)) {
				$response[] = array('logentry' => $r);
		}
	}

	public function updateUserLog() {
		$query = $this->db->prepare('INSERT INTO log(user, logtime) VALUES (:uid,:logtime)');
		$query->bindParam(':uid',$this->id,PDO::PARAM_INT);
		$query->bindParam(':logtime',time(),PDO::PARAM_INT);
		return $query->execute();
	}

	public function getAllBrands() {
		$query = $this->db->prepare('SELECT * FROM brands');
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function getStatistics() {
		$query = $this->db->prepare('SELECT * FROM usage');
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}

class proLogin {
	private $email;
	private $sqlpath;
	function __construct($connect = true) {
		$this->results = array();
		$this->sqlpath = $_SERVER['DOCUMENT_ROOT']."/../db/program.sqlite3";

		if (!file_exists($_SERVER['DOCUMENT_ROOT']."/../db/program.sqlite3"))
			throw new Exception('SQLite Error: File was not found.'.$_SERVER['DOCUMENT_ROOT']);

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