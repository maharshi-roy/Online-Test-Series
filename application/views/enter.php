<html lang = "en">
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<meta charset = "utf-8">
	<title>Home</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">
			<p class = "text-center lead">Welcome to Test Portal</p>
		</div>
		<div class = "row">
			<div class = "col-md-6">
				<p class = "text-center text-danger" style = "font-size:30px;"><b>Login</b></p>
				<form action = "<?php echo base_url(); ?>main/login" method = "post" class = "form-horizontal">
					<div class = "form-group">
						<div class = "col-md-4 col-md-offset-4">
							<label for ="user" class = "control-label">Username</label>
							<input type = "text" name = "user" required placeholder = "Username" class = "form-control" id = "user">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-4 col-md-offset-4">
							<label for = "passwd" class = "control-label">Password</label>
							<input type = "password" name = "passwd" required placeholder = "Password" class = "form-control" id = "passwd">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-2 col-md-offset-4">
							<input type = "submit" name = "login" value = "Login" class = "form-control btn btn-primary active">
						</div>
					</div>
				</form>
			</div>
			<div class = "col-md-6">
				<p class = "text-center text-danger" style = "font-size:30px;"><b>Register</b></p>
				<form action = "<?php echo  base_url(); ?>main/register" method = "post" class = "form-horizontal">
					<div class = "form-group <?php if(form_error('user')) { echo 'has-error'; } ?>">
						<div class = "col-md-4 col-md-offset-4">
							<?php echo form_error('user'); ?>
							<label for = "user_reg" class = "control-label">Username</label>
							<input type = "text" name = "user" required placeholder = "Username" value = "<?php echo set_value('user'); ?>" class = "form-control" id = "user_reg">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-4 col-md-offset-4">
							<label for = "passwd_reg" class = "control-label">Password</label>
							<input type = "password" name = "passwd" required placeholder = "Password" class = "form-control" id = "passwd_reg">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-4 col-md-offset-4 <?php if(form_error('confrm')) { echo 'has-error'; } ?>">
							<?php echo form_error('confrm'); ?>
							<label for = "confrm_passwd_reg" class = "control-label">Confirm Password</label>
							<input type = "password" name = "confrm" required placeholder = "Confirm Password" class = "form-control" id = "confrm_passwd_reg">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-4 col-md-offset-4">
							<label for = "name" class = "control-label">Name</label>
							<input type = "text" name = "name" required placeholder = "Name" value = "<?php echo set_value('name'); ?>" class = "form-control" id = "name">
						</div>
					</div>
					<div class = "form-group">
						<div class = "col-md-4 col-md-offset-4">
							<label for = "type" class = "control-label">Select Category</label>
							<select required name = "type" class = "form-control" id = "type">
								<option>instructor</option>
								<option>student</option>
							</select>
						</div>
					</div>
					<div class = "form-group">	
						<div class = "col-md-3 col-md-offset-4">		
							<input type = "submit" value = "Register" class = "form-control btn btn-primary active">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>