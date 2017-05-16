<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren</title>
</head>
<body>
<div class="col-md-6" class="form-group" >
		<?php 
		date_default_timezone_set('Europe/Amsterdam');
		?>
	 	<h3>Register</h3>
	 	<form action="register" method="post" >
	 	<label for="exampleInputName1">Name:</label>
	 	<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name"><br>
	 	<label for="exampleInputEmail1">Email address</label>
	 	<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required><br>
	 	<label for="exampleInputPassword1">Password</label>
	 	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required><br>
	 	<label for="exampleInputPassword1">Confirm password:</label>
	 	<input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required><br>
	 	<label for="exampleInputName1">Name:</label>
	 	<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name"><br>
	 	<input type="submit" value="Register">
	 	</form>
 	</div>
</body>
</html>