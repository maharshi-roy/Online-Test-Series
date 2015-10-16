<html>
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<title>Test Area</title>
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">
			<p class = "text-center text-danger lead">Test Ongoing</p>
		</div>
		<div class = "col-md-10 col-md-offset-2">
			<form action = "<?php echo base_url(); ?>attempt/fill/<?php echo $question->id; ?>" method = "post" class = "form-horizontal" role = "form">
				<div class = "form-group">
					<?php echo $question->statement; ?>
				</div>
				<div class = "checkbox">
					<label>
						<input type = "checkbox" name = "useranswers[]" value = "1" class = "form-control" style = "height:20px;">
						<?php echo $question->option_1; ?>
					</label>
				</div><br>
				<div class = "checkbox">
					<label>
						<input type = "checkbox" name = "useranswers[]" value = "2" class = "form-control" style = "height:20px;">
						<?php echo $question->option_2; ?>
					</label>
				</div><br>
				<div class = "checkbox">
					<label>
						<input type = "checkbox" name = "useranswers[]" value = "3" class = "form-control" style = "height:20px;">
						<?php echo $question->option_3; ?>
					</label>
				</div><br>
				<div class = "checkbox">
					<label>
						<input type = "checkbox" name = "useranswers[]" value = "4" class = "form-control" style = "height:20px;">
						<?php echo $question->option_4; ?>
					</label>
				</div>
				<br>
				<div class = "col-md-4 col-md-offset-4">
					<input type = "submit" value = "Submit" class = "btn btn-primary" class = "form-control" style = "width:80px;">
				</div>
			</form>
			<br><br>
			<form action = "<?php echo base_url(); ?>attempt/finish" method = "post" class = "form-horizontal">
				<div class = "form-group">
					<div class = "col-md-4 col-md-offset-4">
						<input type = "submit" value = "Finish Test" class = "btn btn-primary" class = "form-control">
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
