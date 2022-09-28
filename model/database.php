<?php 
// Create a connection class
class Connection {
	protected $conn;

	function __construct($path_to_db) {
		if(file_exists($path_to_db)) {
			$this->conn = new PDO('sqlite:' . $path_to_db);
			$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		}
		else {
			echo 'Database file does not exist';
		}
	}
}
