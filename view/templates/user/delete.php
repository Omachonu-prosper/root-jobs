<div class="my-5 text-danger card border-danger" id="delete-section">
	<!-- Let the user know that the password they inputed is wrong -->
	<?php if(isset($_SESSION['message_to_show'])) { ?>
		<div class="alert alert-danger text-center mb-3">
			<?php 
				echo $_SESSION['message_to_show']; 
				unset($_SESSION['message_to_show']);
			?>

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<div class="card-body">
		<h2>Danger Zone <i class="fa fa-exclamation-triangle"></i></h2>
		<div class="card-sub-title my-3">
			Thread with caution. Actions you perform here can not be undone!
		</div>

		<div class="popup-canvas hidden" id="user-delete-confirmation-canvas">
			<div class="shadowed-card card popup-background-blur" id="confirm-user-delete">
				<div class="card-body">
					<p>
						You are about to delete your account "<?php echo $_SESSION['current_user']['username'] ?>". You can not undo this action and all your data will be removed. Enter your password to continue?
					</p>

					<form action="/controller/user/delete.php" method="post" novalidate class="needs-validation">
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Please enter your password" id="password" required name="account_delete_password">

							<div class="invalid-feedback">
							    Please enter a password
						    </div>
						</div>

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