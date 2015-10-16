<html>
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<title>Test Portal</title>
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">
			<p class = "text-center text-danger lead">Welcome to Test Portal</p>
		</div>
		<?php if($this->session->flashdata('msg')) {
		?>
			<p class = "text-center text-info lead"><?php echo $this->session->flashdata('msg'); ?></p>
		<?php } ?>
		<div class = "col-md-4 col-md-offset-4">
			<form action = "<?php echo base_url(); ?>attempt/initialize" method = "post" class = "form-horizontal">
				<div class = "form-group">
					<div class = "col-md-6 col-md-offset-3">
						<label for = "subject" class = "control-label">Select Subject</label>
						<select type = "text" required name = "subject" id = "subject" class = "form-control">
							<option>C</option>
							<option>JAVA</option>
							<option>PHP</option>
						</select>
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-md-6 col-md-offset-3">
						<label for = "difficulty" class = "control-label">Select Difficulty</label>
						<select type = "text" required name = "difficulty" id = "difficulty" class = "form-control">
							<option>Easy</option>
							<option>Intermediate</option>
							<option>Advanced</option>
						</select>
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-md-4 col-md-offset-3">
						<input type = "submit" value = "Lock Subject" class = "btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>