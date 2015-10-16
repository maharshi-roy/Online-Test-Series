<html>
<head>
	<meta name = "viewport" content = "eidth=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<title>Results</title>
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">
			<p class = "text-center lead text-danger">Results</p>
		</div>
		<div class = "row">
			<div class = "col-md-6 col-md-offset-3">
				<p class = "text-center lead text-info">Congrats!!<br>You scored <?php echo $score ?></p>
			</div>
		</div>
		<div class = "col-md-6 col-md-offset-5">
			<form action = "<?php echo base_url(); ?>main" method = "post">
				<input type = "submit" value = "Return to Main Page" class = "btn btn-primary">
			</form>
		</div>
	</div>

</body>
</html>