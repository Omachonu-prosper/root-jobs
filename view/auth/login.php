<?php 
	session_start();
	define('PAGE_TITLE', 'Login - Root Jobs');
	include_once '../templates/header.php';
?>
	<div class="p-3">
		<div class="mx-auto mt-5" style="max-width: 30rem;">
			<div class="card green-border">
				<div class="card-body">
					<!-- There was an error with the previous login and the user has to login again -->
					<?php if(isset($_SESSION['login_error_message'])) { ?>
						<div class="alert alert-danger text-center">
							<?php echo $_SESSION['login_error_message']; ?>
						</div>
					<?php } ?>

					<h1 class="display-4 text-center green-text">Login <i class="fa fa-user-circle-o"></i></h1>

					<form action="../../controller/auth/login.php" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" placeholder="example@example.com" required name="login_form_email" value="<?php if(isset($_SESSION['login_error_message'])) { 
									echo $_SESSION['login_error_email'];
									unset($_SESSION['login_error_message']); 
									unset($_SESSION['login_error_email']);
								} ?>">

							<div class="invalid-feedback">
								Please provide a valid email
							</div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Your Password" required name="login_form_password">

							<div class="invalid-feedback">
								Please enter the password for your account
							</div>
						</div>

						<button type="submit" name="login_form_submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>

			<p class="mt-3">Don't have an account? <a class="green-text" href="/view/auth/signup.php">Signup</a></p>
		</div>
	</div>

<?php include_once '../templates/footer.php' ?>