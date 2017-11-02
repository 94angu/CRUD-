<html>
        <head>
                <title>CodeIgniter Tutorial</title>
                <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
                <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
                
        </head>
        <body>
        	<div class="container">
        		<h2>User Management</h2>
                <p><a class="badge badge-info" href="<?php echo site_url('Users'); ?>">Home</a> | 
                	<a class="badge badge-info" href="<?php echo site_url('Users/registerUser'); ?>">Add user</a> | 
                	<a class="badge badge-info" href="<?php echo site_url('Users/searchUser'); ?>">Search user</a>
                </p>
                <h3><?php echo $title; ?></h3>
        	</div>
 
                