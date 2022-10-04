<?php
session_start();

require_once '../../model/users.php';

// User tried to delete their account and we want to confirm their password to initiate the delete
if(isset($_POST['account_delete_submit'])) {
	$entered_password = $_POST['account_delete_password'];

	// Confirm that the password the user entered to delete their account is correct
	if($entered_password == $_SESSION['current_user']['password']) {
		// Connect to the users model instance and delete the current user using the user's id saved in session
		$user_id = $_SESSION['current_user']['id'];
		$users_instance = new Users('../../root-jobs.db');
		$users_instance->deleteUser($user_id);

		// Remove the user from the browser session
		unset($_SESSION['current_user']);

		// Redirect user to login page
		header('location: /view/auth/login.php');
	} else {
		// Redirect to the delete section of the accounts page and inform the user of the wrong password entered
		$_SESSION['message_to_show'] = 'Account not deleted. Incorrect password!';
		header('location: /view/user/account.php#delete-section');
	}
} else {
	// Redirect to the not found page
	header('location: /view/info/404.php');
}