<?php 
		include("sql.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Management App</title>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<!-- Latest compiled and minified Bootstrap CSS library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>
	<div class="index-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header clearfix">						
						<h2>Emplyee Details</h2>
						<a href="addNewEmployee.php" id="newEmployee" class="btn btn-success">Add New Employee</a>						
					</div>
					<br><br>
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<td>ID</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>Email</td>
								<td>Phone</td>
								<td>Salary</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>			
			</div>
		<div>
	</div>
	<!--JQuery librarty-->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
	crossorigin="anonymous"></script>
	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="JS/JQuery.js" type="text/javascript"></script>
</body>
</html>