<?php 
	session_start();

	// If no user is logged in Redirect them to the login page
	if(isset($_SESSION['current_user'])) {
		// echo $_SESSION['current_user']['id'];
	}
	else {
		header('location: /view/auth/login.php');
	}

	define('CURRENT_PAGE', 'account');
	define('PAGE_TITLE', 'Account settings - Root Jobs');
	include_once '../templates/header.php';
	include_once '../templates/navbar.php';
?>

	<div class="bg-success banner py-5">
		<div class="row account-header mt-5">
			<span class="mr-3">
				<i class="fa fa-user-circle"></i>
			</span>

			<div>
				<h2 class="display-4">
					<?php echo $_SESSION['current_user']['fullname']; ?>
				</h2>
				<h3>
					<?php echo $_SESSION['current_user']['username'] ?>
				</h3>
			</div>
		</div>
	</div>

	<div class="container mt-5" style="max-width: 50rem;">
		<div class="card shadowed-card mb-5">
			<div class="card-body">
				<h3 class="card-title">Education <i class="fa fa-graduation-cap"></i></h3>

				<div class="card-subtitle">
					No education to show yet
				</div>

				<a class="mt-3 btn btn-outline-success">
					Add Education <fa class="fa fa-plus"></fa>
				</a>
			</div>	
		</div>

		<div class="card shadowed-card mb-5">
			<div class="card-body">
				<h3 class="card-title">Work experience <i class="fa fa-briefcase"></i></h3>

				<div class="card-subtitle">
					No work experience to show yet
				</div>

				<a class="mt-3 btn btn-outline-success">
					Add work experience <fa class="fa fa-plus"></fa>
				</a>
			</div>	
		</div>

		<div class="card shadowed-card mb-5">
			<div class="card-body">
				<h3 class="card-title">Skills <i class="fa fa-lightbulb-o"></i></h3>

				<div class="card-subtitle">
					No skills to show yet
				</div>

				<a class="mt-3 btn btn-outline-success">
					Add skills <fa class="fa fa-plus"></fa>
				</a>
			</div>	
		</div>

		<div class="card shadowed-card mb-5">
			<div class="card-body">
				<h3 class="card-title">Likes and hobbies <i class="fa fa-smile-o"></i></h3>

				<div class="card-subtitle">
					No likes and hobbies to show yet
				</div>

				<a class="mt-3 btn btn-outline-success">
					Add likes and hobbies <fa class="fa fa-plus"></fa>
				</a>
			</div>	
		</div>
	</div>

<?php include_once '../templates/footer.php' ?>