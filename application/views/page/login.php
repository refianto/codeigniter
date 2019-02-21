<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<?php echo form_open('login/ceklogin') ?>
		<input type="text" name="user" placeholder="USERNAME">
		<input type="password" name="pass" placeholder="PASSWORD">
		<input type="submit" name="login">
	<?php echo form_close()?>
</body>
</html>

