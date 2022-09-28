<?php 
session_start();

require_once '../../model/users.php';

// Page is accessed from signup page
if(isset($_POST['login_form_submit'])) {
	$email = $_POST['login_form_email'];
	$password = $_POST['login_form_password'];

	$users_instance = new Users('../../root-jobs.db');
	$user = $users_instance->getUser($email, $password);

	if($user) {
		// User has logged in successfully
		// Create a session value for them so they can access all resources authorised for them
		$_SESSION['current_user'] = $user;

		header('location: /view/user/dashboard.php');
	}
	else {
		// Keep the user on the login page but send back an error and the email they entered do they can use correct credentials
		$_SESSION['login_error_message'] = 'Incorrect credentials';
		$_SESSION['login_error_email'] =  $email;
		header('location: /view/auth/login.php');
	}
	
}
else {
	// Redirect to 404 page
	header('location: /view/info/404.php');
}