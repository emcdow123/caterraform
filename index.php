<!DOCTYPE html>
<html>
	<?php require 'head.php';?>
	<body>
		<div class="container">
			<?php require 'header.php';?>

			<div class="row">
				<div class="col-12">
					<h1 class="page-heading">Patient Information Form</h1>
				</div>
			</div>

			<form class="form-inline">
				<div class="form-group">
					<label for="first-name">First Name:</label>
					<input type="text" class="form-control" id="first-name" placeholder="Enter first name...">
				</div>

				<div class="form-group">
					<label for="middle-initial">Middle Initial:</label>
					<input type="text" class="form-control" id="middle-initial">
				</div>

				<div class="form-group">
					<label for="last-name">Last Name:</label>
					<input type="text" class="form-control" id="last-name" placeholder="Enter last name...">
				</div>

				<div class="form-group">
					<label for="birth-date">Date of Birth:</label>
					<input type="text" class="form-control" id="birth-date" placeholder="Enter birthdate...">
				</div>
			</form>
		</div>
	</body>
</html>