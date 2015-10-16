<html>
<head>
	<meta charset = "utf-8">
	<title>Profile</title>
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "./bootstrap/css/bootstrap.min.css">
	<script type = "text/javascript"></script>
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">	
			<p class = "lead text-center">Welcome <?php echo $this->session->userdata('name'); ?> !!</p>
		</div>
		<div class = "row">
			<div class = "col-md-6 col-md-offset-3">
				<div class = "col-md-2 col-md-offset-5">
				<form action = "<?php echo base_url(); ?>main/logout" method = "post" class = "form-horizontal">
					<div class = "form-group">
						<input type = "submit" value = "Log Out" class = "form-control btn btn-primary">
					</div>
				</form>
				</div>
			</div>
		</div>
		<?php
			if ($this->session->userdata('type') == 'instructor') {
		?>
		<div class = "row">
			<div class = "col-md-4 col-md-offset-4">
				<div class = "col-md-4 col-md-offset-4">
					<form action = "<?php echo base_url(); ?>main/contribute" method = "post" class = "form-horizontal">
						<div class = "form-group">
							<input type = "submit" value = "Contribute" class = "form-control btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php } ?>

		<?php
			if ($this->session->userdata('type') == 'student') {
		?>
		<div class = "row">
			<div class = "col-md-4 col-md-offset-4">
				<div class = "col-md-4 col-md-offset-4">
					<form action = "<?php echo base_url(); ?>main/attempt" method = "post" class = "form-horizontal">
						<div class = "form-group">	
							<input type = "submit" value = "Attempt a Test" class = "btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>

</body>
</html>