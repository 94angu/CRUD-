<!DOCTYPE html>
<html>
<head>
	<title>Search user</title>

</head>
<body>

	<?php echo validation_errors();?>
	
	<?php echo form_open('Users/SearchUser'); ?>
	<div class="container">
		<form>
			<div class="form-group">
				<label><b>Index No :</b></label>
				<input class="form-control" type="text" name="index_no" placeholder="Index No" maxlength=20 required=""><br>
			</div>
			

			<button type="submit" class="btn btn-success">Search</button>
		</form>
	</div>

	<?php echo form_close(); ?>
		
	
</body>
</html>