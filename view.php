<?php 
		include("sql.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Employee</title>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<!-- Latest compiled and minified Bootstrap CSS library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<div class="view-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset4">
					<div class="page-header clearfix">						
						<h2>Emplyee</h2>											
					</div>					
					<div id="employeeInfo">
						<h3>Name</h3>
						<span><?php echo $firstName." ".$lastName ?></span>
						<h3>Email</h3>
						<span><?php echo $email ?></span>
						<h3>Phone</h3>
						<span><?php echo $phone ?></span>
						<h3>Salary</h3>
						<span><?php echo $salary ?></span>
						<br><br>
						<a href="index.php" class="btn btn-primary">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
	crossorigin="anonymous"></script>
	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="JS/JQuery.js" type="text/javascript"></script>

	
</body>
</html>