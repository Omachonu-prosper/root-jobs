<?php
require_once 'database.php';

// Inherit from the Connection class
class Users extends Connection {
	public function newUser($fullname, $username, $role, $password, $email) {
		$sql = "INSERT INTO users 
					(fullname, username, role, password, email) 
				VALUES 
					(:fullname, :username, :role, :password, :email)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
						'fullname' => $fullname, 
						'username' => $username, 
						'role' => $role,
						'password' => $password,
						'email' => $email
					]);
	}

	public function allUsers() {
		$sql = "SELECT * FROM users";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}