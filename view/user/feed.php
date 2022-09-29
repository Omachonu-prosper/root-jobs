<?php 
	session_start();

	// If no user is logged in Redirect them to the login page
	if(isset($_SESSION['current_user'])) {
		echo $_SESSION['current_user']['id'];
	}
	else {
		header('location: /view/auth/login.php');
	}

	$page_title = 'Job feeds - Root Jobs';
	include_once '../templates/header.php';
?>


<?php include_once '../templates/footer.php' ?>