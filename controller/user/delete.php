<?php
session_start();

require_once '../../model/users.php';

// Connect to the users model instance and delete the current user using the user's id saved in session
$user_id = $_SESSION['current_user']['id'];
$users_instance = new Users('../../root-jobs.db');
$users_instance->deleteUser($user_id);

// Remove the user from the browser session
unset($_SESSION['current_user']);

// Redirect user to login page
header('location: /view/auth/login.php');