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

		// Return the id of the last inserted row
		return $this->conn->lastInsertId();
	}

	public function getUser($email, $password) {
		$sql = "SELECT * FROM users WHERE password = :password AND email = :email";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
						'password' => $password,
						'email' => $email
					]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function updateUser($fullname, $username, $email, $id) {
		$sql = "UPDATE users SET username = :username, email = :email, fullname = :fullname WHERE id = :id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
					'fullname' => $fullname,
					'username' => $username,
					'email' => $email,
					'id' => $id
				]);
	}

	public function allUsers() {
		$sql = "SELECT * FROM users";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}