<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<title>Contribution</title>
</head>
<body>
	<div class = "container bg-success">
		<div class = "jumbotron">
			<p class = "lead text-center text-danger">Contribution Portal</p>
		</div>
		<?php
			if ($this->session->userdata('subject')) {
				if($this->session->flashdata('msg')) {
			?>
					<p class = "text-center text-danger"><?php echo $this->session->flashdata('msg'); ?></p>
			<?php } ?>
		<div class = "row">
			<div class = "col-md-6 col-md-offset-2">
				<form action = "<?php echo base_url(); ?>contribute/addquestion" method = "post" class = "form-horizontal">
					<div class = "form-group col-md-8">
						<label for = "statement" class = "control-label">Problem Statement</label>
					</div>
					<div class = "form-group col-md-8">
						<div class = "col-md-10">
							<input type = "text" name = "statement" required placeholder = "Problem Statement" class = "form-control" id = "statement" value = "<?php echo set_value('statement'); ?>">
						</div>
					</div>
					<div class = "form-group col-md-8">
						<label class = "control-label">Select Options and the Answers</label>
					</div>
					<div class = "form-group col-md-8">	
						<div class = "col-md-10">
							<input type = "text" name = "options[]" required placeholder = "Option 1" class = "form-control"  value = "<?php echo set_value('options[1]'); ?>">
						</div>
						<div class = "col-md-2">
							<input type = "checkbox" name = "answers[]" value = "1" class = "form-control" style = "height:18px;">
						</div>
					</div>
					<div class = "form-group col-md-8">
						<div class = "col-md-10">
							<input type = "text" name = "options[]" required placeholder = "Option 2" class = "form-control">
						</div>
						<div class = "col-md-2">
							<input type = "checkbox" name = "answers[]" value = "2" class = "form-control" style = "height:18px;">
						</div>
					</div>
					<div class = "form-group col-md-8">
						<div class = "col-md-10">
							<input type = "text" name = "options[]" required placeholder = "Option 3" class = "form-control">
						</div>
						<div class = "col-md-2">
							<input type = "checkbox" name = "answers[]" value = "3" class = "form-control" style = "height:18px;">
						</div>
					</div>
					<div class = "form-group col-md-8">
						<div class = "col-md-10">
							<input type = "text" name = "options[]" required placeholder = "Option 4" class = "form-control">
						</div>
						<div class = "col-md-2">
							<input type = "checkbox" name = "answers[]" value = "4" class = "form-control" style = "height:18px;">
						</div>
					</div>
					<div class = "form-group col-md-8">
						<label class = "control-label">Select Difficulty</label>
					</div>
					<div class = "form-group col-md-8">
						<div class = "col-md-10">
							<select name = "difficulty" required class = "form-control">
								<option>Easy</option>
								<option>Intermediate</option>
								<option>Advanced</option>
							</select>
						</div>
					</div>
					<div class = "form-group col-md-10">
						<div class = "col-md-5">
							<input type = "submit" value = "Contribute Question" class = "form-control btn btn-primary">
						</div>
					</div>
				</form>
			</div>
			<div class = "col-md-4">
				<br><br><br><br><br><br><br>
				<form action = "<?php echo base_url(); ?>contribute/change" method = "post" class = "form-horizontal">
					<div class = "form-group">
						<div class = "col-md-6">
							<input type = "submit" value = "Change Subject" class = "form-control btn btn-primary">
						</div>
					</div>
				</form>
				<form action = "<?php echo base_url(); ?>contribute/finish" method = "post" class = "form-horizontal">
					<div class = "form-group">
						<div class = "col-md-6">
							<input type = "submit" value = "Finish Contribution" class = "form-control btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
			<?php	}
			?>

			<?php
				if (!$this->session->userdata('subject')) {
			?>
		<div class = "col-md-4 col-md-offset-5">
			<form action = "<?php echo base_url(); ?>contribute/subject" method = "post" class = "form-horizontal">
				<p class = "text-left"><b>Select Subject</b></p>
				<div class = "form-group">
					<div class = "col-md-6">
						<select type = "text" name = "subject" class = "form-control">
							<option>C</option>
							<option>JAVA</option>
							<option>PHP</option>
						</select>
					</div>
				</div>
				<div class = "form-group">
					<div class = "col-md-6">
						<input type = "submit" value = "Select Subject" class = "form-control btn btn-primary">
					</div>
				</div>
			</form>
			<form action = "<?php echo base_url(); ?>contribute/finish" method = "post" class = "form-horizontal">
				<div class = "form-group">
					<div class = "col-md-6">
						<input type = "submit" value = "Finish Contribution" class = "form-control btn btn-primary">
					</div>
				</div>
			</form>
		</div>
			<?php } ?>
	</div>

</body>
</html>

	