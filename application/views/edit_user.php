<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>

	<style type="text/css">
		/* Full-width input fields */
		input[type=text], input[type=password] {
		    width: 50%;
		    float: center;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}

		/* Set a style for all buttons */
		button {
		    background-color: #4CAF50;
		    float: center;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;

		    cursor: pointer;
		    width: 20%;
		}

		/* Add padding to container elements */
		.container {
		    padding: 16px;
		    width: 50%;
		    border: 1px solid #ccc;
		    border-width: 3px;
		}

	</style>
</head>
<body>

	<?php echo validation_errors();?>

	<?php echo form_open('Users/editUser/'.$user_details['index_no']); ?>
	
		<div class="container">

			<label><b>Index No :</b></label>
			<input type="text" name="index_no" placeholder="Index No" maxlength=20 required="" disabled="true" value="<?php echo $user_details['index_no'] ?>"><br>

			<label><b>First Name :</b></label>
			<input type="text" name="first_name" placeholder="First name" maxlength=20 required="" value="<?php echo $user_details['first_name'] ?>"><br>

			<label><b>Last Name :</b></label>
			<input type="text" name="last_name" placeholder="Last name" maxlength=20 required="" value="<?php echo $user_details['last_name'] ?>"><br>

			<label><b>Telephone No :</b></label>
			<input type="text" name="t_no" placeholder="Telephone No" maxlength=10 minlength="10" required="" value="<?php echo $user_details['tel_no'] ?>"><br><br>

			<button type="submit" class="savebtn">Save</button>


		</div>

	<?php echo form_close(); ?>
		
	
</body>
</html>