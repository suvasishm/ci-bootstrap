<?php
if ($this->session->logged_in) {
	$name = $this->session->name;
	$email = $this->session->email;
	$user_type = $this->session->user_type;
}
?>

<div>
	<div>Welcome to Home Page</div>
	<div>Your Email is <?php echo $email ?></div>
	<div>Account type <?php echo $user_type ?></div>
	<?php if ($user_type < USER_VENDOR)
		echo "<div><b><a href='/admin/create_user'>Create a New User</a></b></div>";
	?>
</div>
