<?php 
// Page is accessed from signup page
if(isset($_POST['signup_form_submit'])) {
	$user = [
		"fullname" => $_POST['signup_form_fullname'],
		"username" => $_POST['signup_form_username'],
		"email" => $_POST['signup_form_email'],
		"userrole" => $_POST['signup_form_userrole'],
		"password" => $_POST['signup_form_password']
	];

	print_r($user);
}
else {
	// Redirect to 404 page
	header('location: /view/info/404.php');
}