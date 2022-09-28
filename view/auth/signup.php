<?php include_once '../templates/header.php' ?>

	<div class="p-3">
		<div class="mx-auto mt-5" style="max-width: 30rem;">
			<div class="card green-border">
				<div class="card-body">
					<h1 class="display-4 text-center green-text">Signup <i class="fa fa-user-plus"></i></h1>

					<form action="../../controller/auth/signup.php" method="post" class="needs-validation" id="signup" novalidate>
						<div class="form-group">
							<label for="fullname">Full name <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="fullname" placeholder="John Doe" required name="signup_form_fullname" minlength="3">

							<div class="invalid-feedback">
							    Your name cannot be less than 3 characters
						    </div>
						</div>

						<div class="form-group">
							<label for="username">Username <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="username" placeholder="johndoe123" required name="signup_form_username" minlength="5" maxlength="20">

							<div class="invalid-feedback">
							    Username cannot be between 5 to 20 characters
						    </div>
						</div>

						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="email" placeholder="johndoe@example.com" required name="signup_form_email">

							<div class="invalid-feedback">
							    Please input a valid email
						    </div>
						</div>

						<div class="form-group">
							<p>What are you here for <span class="text-danger">*</span></p>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="user-role" name="signup_form_userrole" class="custom-control-input" required value="employer">
								<label class="custom-control-label" for="user-role">I want to hire</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline2" name="signup_form_userrole" class="custom-control-input" value="employee" required>
								<label class="custom-control-label" for="customRadioInline2">I want to be hired</label>
							</div>
						</div>

						<div class="form-group">
							<label for="password">Password <span class="text-danger">*</span></label>
							<input type="password" class="form-control" id="password" placeholder="Your Password" required name="signup_form_password" minlength="6">

							<div class="invalid-feedback">
							    Password must be more than 6 characters and match confirm password
						    </div>
						</div>

						<div class="form-group">
							<label for="confirm-password">Confirm password <span class="text-danger">*</span></label>
							<input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>

							<div class="invalid-feedback">
							    Confirm password is required and must match password
						    </div>
						</div>

						<button type="submit" name="signup_form_submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>

			<p class="mt-3">Already have an account? <a class="green-text" href="/view/auth/login.php">Login</a></p>
		</div>
	</div>

<?php include_once '../templates/footer.php' ?>