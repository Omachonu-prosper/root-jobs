<?php 
session_start();

require_once '../../model/users.php';

// Page is accessed from signup page
if(isset($_POST['signup_form_submit'])) {
	$user = [
		"fullname" => $_POST['signup_form_fullname'],
		"username" => $_POST['signup_form_username'],
		"email" => $_POST['signup_form_email'],
		"role" => $_POST['signup_form_userrole'],
		"password" => $_POST['signup_form_password']
	];

	$users_instance = new Users('../../root-jobs.db');
	$user_id = $users_instance->newUser(
						$user['fullname'],
						$user['username'],
						$user['role'],
						$user['password'],
						$user['email']
					);

	// User has signed up successfully
	// Create a session value for them so they can access all resources authorised for them
	$_SESSION['current_user'] = $user;
	$_SESSION['current_user']['id'] = $user_id;

	header('location: /view/user/account.php');
}
else {
	// Redirect to 404 page
	header('location: /view/info/404.php');
}