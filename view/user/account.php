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

		<!-- User details update section -->
		<div class="my-5">
			<h2>Update account details</h2>

			<form action="/controller/user/update.php" method="post" class="needs-validation" novalidate>
				<div class="form-group">
					<label for="fullname">Full name <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="fullname" placeholder="John Doe" required name="update_form_fullname" minlength="3" value="<?php echo $_SESSION['current_user']['fullname'] ?>">

					<div class="invalid-feedback">
					    Your name cannot be less than 3 characters
				    </div>
				</div>

				<div class="form-group">
					<label for="username">Username <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="username" placeholder="johndoe123" required name="update_form_username" minlength="5" maxlength="20" value="<?php echo $_SESSION['current_user']['username'] ?>">

					<div class="invalid-feedback">
					    Username must be between 5 to 20 characters
				    </div>
				</div>

				<div class="form-group">
					<label for="email">Email <span class="text-danger">*</span></label>
					<input type="email" class="form-control" id="email" placeholder="johndoe@example.com" required name="update_form_email" value="<?php echo $_SESSION['current_user']['email'] ?>">

					<div class="invalid-feedback">
					    Please input a valid email
				    </div>
				</div>

				<button type="submit" name="update_form_submit" class="btn btn-success">Update details</button>
			</form>
		</div>

		<div class="my-5 text-danger card border-danger">
			<div class="card-body">
				<h2>Danger Zone <i class="fa fa-exclamation-triangle"></i></h2>
				<div class="card-sub-title my-3">
					Thread with caution. Actions you perform here can not be undone!
				</div>

				<div class="popup-canvas hidden" id="user-delete-confirmation-canvas">
					<div class="shadowed-card card popup-background-blur" id="confirm-user-delete">
						<div class="card-body">
							<p>You are about to delete your account "<?php echo $_SESSION['current_user']['username'] ?>". You can not undo this action and all your data will be removed. Are you sure you want to continue?</p>

							<form action="/controller/user/delete.php" method="post">
								<a href="#!" id="cancel-user-delete" class="btn btn-outline-success mr-3">
									Cancel
								</a>

								<button type="submit" name="account_delete_submit" class="btn btn-outline-danger">
									Confirm Delete
								</button>
							</form>
						</div>
					</div>
				</div>

				<button type="submit" name="account_delete_submit" id="show-user-delete-confirmation-canvas" class="btn btn-danger">
					Delete account
				</button>
			</div>
		</div>
	</div>

<?php include_once '../templates/footer.php' ?>