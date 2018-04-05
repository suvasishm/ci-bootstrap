<?php
if (isset($this->session->userdata['logged_in'])) {
	$email = ($this->session->userdata['logged_in']['email']);
}
?>
<div class="container">
	<div class="row">
		<?php
		echo "Hello <b id='welcome'><i>" . $email . "</i> !</b>";
		echo "<br/>";
		echo "<br/>";
		echo "Welcome to Admin Page";
		echo "<br/>";
		echo "<br/>";
		echo "Your Email is " . $email;
		echo "<br/>";
		?>
		<b id="logout"><a href="/logout">Logout</a></b>
	</div>
</div>
