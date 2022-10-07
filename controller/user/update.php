<?php
session_start();
require_once '../../model/users.php';

// Page is accessed from signup page
if(isset($_POST['update_form_submit'])) {
	$email = $_POST['update_form_email'];
	$fullname = $_POST['update_form_fullname'];
	$username = $_POST['update_form_username'];
	$id = $_SESSION['current_user']['id'];

	// Update user details in the databse
	$users_instance = new Users('../../root-jobs.db');
	$users_instance->updateUser($fullname, $username, $email, $id);

	// Update user details in the session
	$_SESSION['current_user']['fullname'] = $fullname;
	$_SESSION['current_user']['username'] = $username;
	$_SESSION['current_user']['email'] = $email;

	header('location: /view/user/account.php');
}
else {
	// Redirect to 404 page
	header('location: /view/info/404.php');
}