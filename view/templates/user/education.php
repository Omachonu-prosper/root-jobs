<?php 
require_once '../../model/education.php';

$user = $_SESSION['current_user'];
$education = new Education('../../root-jobs.db');
$all_education = $education->getUsersEducation($user['id']);

?>

<div class="card shadowed-card mb-5">
	<div class="card-body">
		<h3 class="card-title">Education <i class="fa fa-graduation-cap"></i></h3>

		<div class="card-subtitle">
			<?php if(empty($all_education)) { ?>
				No education to show yet.
			<?php } else { ?>
				<?php foreach($all_education as $each_education) { ?>
					<div class="card mt-3 border-success">
						<div class="card-body">
							<h5 class="card-title"><?php echo $each_education->institution; ?></h5>
							<h6 class="card-subtitle"><?php echo $each_education->degree; ?></h6>
							<div>
								<span>Admitted: <?php echo $each_education->start_date; ?></span> - 
								<span>Graduated: <?php echo $each_education->end_date; ?></span>
							</div>
							<div>
								Graduation grade: <?php echo $each_education->grade; ?>
							</div>

							<div class="mt-3">
								<a href="#!" class="card-link text-warning">Update</a>
								<a href="#!" class="card-link text-danger">Delete</a>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>

		<div id="add-education-form" class="hidden">
			<div class="card mt-3 border-success">
			    <div class="card-body">
			        <h4>Add educational qualification</h4>

			        <form action="../../controller/user/education/create.php" class="form-row needs-validation" id="add-education-main-form" method="post" novalidate>
			          	<div class="form-group col-md-6">
			            	<label for="institution">Institution <span class="text-danger">*</span></label>
			            	<input type="text" class="form-control" id="institution" name="education_form_institution" placeholder="Where did you study?" required>

			            	<div class="invalid-feedback">You must provide the name of your school</div>
			          	</div>

			          	<div class="form-group col-md-6">
			            	<label for="degree">Degree obtained <span class="text-danger">*</span></label>
			            	<input type="text" class="form-control" id="degree" name="education_form_degree" placeholder="What degree did you obtain" required>

			            	<div class="invalid-feedback">You must provide a degree</div>
			          	</div>

			          	<div class="form-group col-md-4">
				            <label for="start-date">Start Date <span class="text-danger">*</span></label>
				            <input type="date" class="form-control" name="education_form_startdate" id="start-date" required>
			          	</div>

			          	<div class="form-group col-md-4">
			            	<label for="end-date">End Date <span class="text-danger">*</span></label>
			            	<input type="date" class="form-control" name="education_form_enddate" id="end-date" required>
			          	</div>

			          	<div class="form-group col-md-4">
			            	<label for="grade">Grade <span class="text-danger">*</span></label>
			            	<select id="grade" class="custom-select" name="education_form_grade">
			              		<option value="First-class">First class</option>
			              		<option value="Second-class">Second class</option>
			              		<option value="Third-class">Third class</option>
			              		<option value="Not Applicable">Other</option>
			            	</select>
			          	</div>

			          	<div class="col-12">
			            	<a class="mt-3 btn btn-outline-dark" id="close-education-form">Cancel</a>
			            	<button type="submit" name="education_form_submit" class="mt-3 btn btn-outline-success">Add education</button>
			          	</div>
			        </form>
			    </div>
			</div>
		</div>

		<a class="mt-3 btn btn-outline-success" id="add-education-button">
			Add Education <fa class="fa fa-plus"></fa>
		</a>
	</div>	
</div>