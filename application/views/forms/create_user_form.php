<?php
if (!$this->session->logged_in || $this->session->user_type >= USER_VENDOR) {
	header("location: /unauthorized");
}
?>

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6 mx-auto">

				<?php
				if (isset($message_display)) {
					echo "<div class='alert-success'>" . $message_display . "</div><br/>";
				}
				?>

				<?php
				if (isset($error_message)) {
					echo "<div class='alert-danger'>" . $error_message . "</div><br/>";
				}
				?>

				<!-- form card login -->
				<div class="card rounded-0">
					<div class="card-header">
						<h3 class="mb-0">Create New User</h3>
					</div>
					<div class="card-body">
						<form class="form" role="form" id="admin-register-form" action="/admin/create_user"
							  method="POST">
							<div class="form-group">
								<label for="title">User Type</label>
								<select class="form-control  col-3" name="user_type" id="user_type" required>
									<?php
									if (isset($user_type_id)) {
										echo "<option value=" . $user_type_id . ">" . $user_type_name . "</option>";
									} else {
										foreach ($user_types as $user_type) {
											echo "<option value=" . $user_type->id . ">" . $user_type->type . "</option>";
										}
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control form-control-lg rounded-0" name="name" id="name"
									   placeholder="Name" value="<?php if (isset($name)) echo $name ?>" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control form-control-lg rounded-0" name="email"
									   id="email" placeholder="Email" value="<?php if (isset($email)) echo $email ?>"
									   required>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control form-control-lg rounded-0" id="password"
									   name="password" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label for="confirm-password">Confirm Password</label>
								<input type="password" class="form-control form-control-lg rounded-0"
									   id="confirm-password" name="confirm-password" placeholder="Confirm Password"
									   required>
							</div>

							<button type="submit" class="btn btn-success btn-lg float-right" id="register-submit"
									name="register-submit">Add Admin
							</button>
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
