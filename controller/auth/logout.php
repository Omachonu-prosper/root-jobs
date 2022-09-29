<?php 
session_start();

// Remove user from the session
unset($_SESSION['current_user']);

// Redirect user to login page
header('location: /view/auth/login.php');