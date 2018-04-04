<?php
if ($this->session->logged_in) {
	$name = $this->session->name;
	$email = $this->session->email;
	$user_type = $this->session->user_type == 1 ? "ADMIN" : "VENDOR";
}
?>

<div>
	<div> Hello, <b><i><?php echo $name ?></i></b></div>
	<div>Welcome to Home Page</div>
	<div>Your Email is <?php echo $email ?></div>
	<div>Account type <?php echo $user_type ?></div>
	<?php if ($user_type == "ADMIN")
		echo "<div><b><a href='admin/create_user_form'>Create a New User</a></b></div>";
	?>
	<div><b><a href="/logout">Logout</a></b></div>
</div>
