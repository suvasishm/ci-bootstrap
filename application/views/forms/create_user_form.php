<?php
/*if (isset($user_type)) {
	// Todo: super admin can't be created/ do something here

	if($user_type == USER_ADMIN) {
		$user_type_name = USER_ADMIN_NAME;
	} else if ($user_type == USER_VENDOR) {
		$user_type_name = USER_VENDOR_NAME;
	}
}*/
?>



<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6 mx-auto">

				<!-- form card login -->
				<div class="card rounded-0">
					<div class="card-header">
						<h3 class="mb-0">Create New User</h3>
					</div>
					<div class="card-body">
						<form class="form" role="form" id="admin-register-form" action="/admin/create_user" method="POST">
							<div class="form-group col-md-6">
								<label for="title">Title</label>
								<select class="form-control" name="user_type" id="user_type" required>
									<option><?php echo $user_type_name?></option>
									<option>Mr.</option>
									<option>Ms.</option>
									<option>Mrs.</option>
									<option>Dr.</option>
									<option>Rev.</option>
								</select>
							</div>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control form-control-lg rounded-0" name="name" id="name" placeholder="Name" value="<?php echo $name?>" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" placeholder="Email" value="<?php echo $email?>" required>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control form-control-lg rounded-0" id="password" name="password" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label for="confirm-password">Confirm Password</label>
								<input type="password" class="form-control form-control-lg rounded-0" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
							</div>

							<button type="submit" class="btn btn-success btn-lg float-right" id="register-submit" name="register-submit">Add Admin</button>
						</form>
					</div>
					<!--/card-block-->
				</div>
				<!-- /form card login -->
			</div>
		</div>
		<!--/row-->
	</div>
	<!--/col-->
</div>
<!--/row-->



<!--<form id="register-form" action="/registration" method="post" role="form" style="display: none;">
	<div class="form-group">
		<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
	</div>
	<div class="form-group">
		<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
	</div>
	<div class="form-group">
		<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
		<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
			</div>
		</div>
	</div>
</form>-->
