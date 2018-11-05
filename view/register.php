<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to register yourself</h3>
	<form method="post">
		<fieldset>
			<legend>Registration Form</legend>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="">
			<br>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="">
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<br>
			<input type="hidden" name="page" value="register">
			<input type="hidden" name="caller" value="self">
			<input type="submit" value="Sign Up">
		</fieldset>
	</form>
<?php
	}
	else
	{
?>
		<h3>Registration Successful</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
