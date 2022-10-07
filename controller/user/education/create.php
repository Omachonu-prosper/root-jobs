<?php
session_start();

require_once '../../../model/education.php';

if(isset($_POST['education_form_submit'])) {
	$institution = $_POST['education_form_institution'];
	$degree = $_POST['education_form_degree'];
	$start_date = $_POST['education_form_startdate'];
	$end_date = $_POST['education_form_enddate'];
	$grade = $_POST['education_form_grade'];
	$user_id = $_SESSION['current_user']['id'];

	// Instantiate the education model and add the new education
	$education = new Education('../../../root-jobs.db');
	$education->addEducation($institution, $degree, $start_date, $end_date, $grade, $user_id);

	// Redirect to the account page when all is done
	header('location: /view/user/account.php');
} else {
	// Redirect to the not found page
	header('location: /view/info/404.php');
}