<?php 
require_once '../../model/users.php';

// Page is accessed from signup page
if(isset($_POST['signup_form_submit'])) {
	$user = [
		"fullname" => $_POST['signup_form_fullname'],
		"username" => $_POST['signup_form_username'],
		"email" => $_POST['signup_form_email'],
		"userrole" => $_POST['signup_form_userrole'],
		"password" => $_POST['signup_form_password']
	];

	$users_instance = new Users('../../root-jobs.db');
	$users_instance->newUser(
						$user['fullname'],
						$user['username'],
						$user['userrole'],
						$user['password'],
						$user['email']
					);

	header('location: /');
}
else {
	// Redirect to 404 page
	header('location: /view/info/404.php');
}