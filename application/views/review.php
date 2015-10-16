<html>
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<title>Test Area</title>
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">
			<p class = "text-center text-danger lead">Review Portal</p>
		</div>
		<?php

			$ans = explode(" ", $question->answers);

		?>
		<div class = "col-md-8 col-md-offset-2">
			<div class = "row">
				<p class = "text-center text-default"><?php echo $question->statement; ?></p>
			</div>
			<div class = "row">
				<?php 
					if (in_array($ans, '1')) {
				?>
				<p class = "text-center text-success"><?php echo $question->option_1; ?></p>
				<?php
					}
					else {
				?>
				<p class = "text-center text-default"><?php echo $question->option_1; ?></p>
				<?php } ?>
			</div>
			<div class = "row">
				<?php 
					if (in_array($ans, '2')) {
				?>
				<p class = "text-center text-success"><?php echo $question->option_2; ?></p>
				<?php
					}
					else {
				?>
				<p class = "text-center text-default"><?php echo $question->option_2; ?></p>
				<?php } ?>
			</div>
			<div class = "row">
				<div class = "form-group">
					<input type = "submit" class = "form-control btn btn-primary" value = "Accept">
				</div>
				<?php 
					if (in_array($ans, '3')) {
				?>
				<p class = "text-center text-success"><?php echo $question->option_3; ?></p>
				<?php
					}
					else {
				?>
				<p class = "text-center text-default"><?php echo $question->option_3; ?></p>
				<?php } ?>
			</div>
			<div class = "row">
				<?php 
					if (in_array($ans, '4')) {
				?>
				<p class = "text-center text-success"><?php echo $question->option_4; ?></p>
				<?php
					}
					else {
				?>
				<p class = "text-center text-default"><?php echo $question->option_4; ?></p>
				<?php } ?>
			</div>
			<br><br>
			<form action = "<?php echo base_url(); ?>review/recieve/<?php echo $question->id; ?>" method = "post">
				<div class = "form-group">
					<input type = "submit" class = "form-control btn btn-primary" value = "Accept" name = "accept">
				</div>
				<div class = "form-group">
					<input type = "submit" class = "form-control btn btn-primary" value = "Discard" name = "discard">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
