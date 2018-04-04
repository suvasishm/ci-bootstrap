<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6 mx-auto">

				<?php
				echo "<div class='alert-success'>";
				if (isset($message_display)) {
					echo $message_display;
				}
				echo "</div><br/>";
				?>

				<!-- form card login -->
				<div class="card rounded-0">
					<div class="card-header">
						<h3 class="mb-0">Login</h3>
					</div>
					<div class="card-body">
						<?php
						echo "<div class='alert-danger'>";
						if (isset($error_message)) {
							echo $error_message;
						}
						echo "</div><br/>";
						?>
						<form class="form" role="form" id="login-form" action="/login" method="POST">
							<div class="form-group">
								<label for="email">Username</label>
								<input type="text" class="form-control form-control-lg rounded-0" name="email" id="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control form-control-lg rounded-0" id="password" name="password" required>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" name="remember" id="remember">
								<label class="form-check-label" for="remember">Remember Me</label>
							</div>
							<button type="submit" class="btn btn-success btn-lg float-right" id="login-submit" name="login-submit">Login</button>
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

<!--	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="#" class="active" id="login-form-link">Login</a>
						</div>
						<div class="col-xs-6">
							<a href="#" id="register-form-link">Register</a>
						</div>
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="login-form" action="/login" method="post" role="form" style="display: block;">

								<div class="form-group">
									<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group text-center">
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label for="remember"> Remember Me</label>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
										</div>
									</div>
								</div>
							</form>
							<form id="register-form" action="/registration" method="post" role="form" style="display: none;">

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
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->



