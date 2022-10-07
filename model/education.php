<?php 
require_once 'database.php';

// Extend the connection class
class Education extends Connection {
	public function getUsersEducation($user_id) {
		$sql = "SELECT * FROM education WHERE user_id = :user_id";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
						'user_id' => $user_id
					]);

		return $stmt->fetchAll();
	}

	public function addEducation($institution, $degree,	$start_date, $end_date,	$grade, $user_id) {
		$sql = "INSERT INTO education 
					(institution, degree, start_date, end_date, grade, user_id)
				VALUES 
					(:institution, :degree, :start_date, :end_date, :grade, :user_id)";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([
						'institution' => $institution,
						'degree' => $degree,
						'start_date' => $start_date,
						'end_date' => $end_date,
						'grade' => $grade,
						'user_id' => $user_id
					]);
	}
}