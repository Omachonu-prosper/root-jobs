<?php include_once '../templates/header.php' ?>

	<div class="p-3">
		<div class="mx-auto mt-5" style="max-width: 30rem;">
			<div class="card green-border">
				<div class="card-body">
					<h1 class="display-4 text-center green-text">Login <i class="fa fa-user-circle-o"></i></h1>

					<form action="" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" placeholder="johndoe@example.com" required name="login_form_email">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Your Password" required name="login_form_password">
						</div>

						<button type="submit" name="login_form_submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>

			<p class="mt-3">Don't have an account? <a class="green-text" href="/view/auth/signup.php">Signup</a></p>
		</div>
	</div>

<?php include_once '../templates/footer.php' ?>