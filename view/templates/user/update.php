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