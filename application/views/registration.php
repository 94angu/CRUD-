<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

</head>
<body>

	
	<div class="container">
		<?php echo validation_errors();?>

		<?php echo form_open('Users/registerUser'); ?>
		<form>
			<div class="form-group">
				<label><b>Index No :</b></label>
				<input class="form-control" type="text" name="index_no" placeholder="Index No" maxlength=20 required=""><br>
			</div>
			<div>
				<label><b>First Name :</b></label>
				<input class="form-control" type="text" name="first_name" placeholder="First name" maxlength=20 required=""><br>
			</div>
			<div>
				<label><b>Last Name :</b></label>
				<input class="form-control" type="text" name="last_name" placeholder="Last name" maxlength=20 required=""><br>
			</div>
			<div>
				<label><b>Telephone No :</b></label>
				<input class="form-control" type="text" name="t_no" placeholder="Telephone No" maxlength=10 minlength="10" required=""><br><br>
			</div>
			<div>
				<button type="submit" class="btn btn-primary registerbtn">Register</button>
			</div>

		</form>

		<?php echo form_close(); ?>
		
	</div>
	
	
		
	
</body>
</html>