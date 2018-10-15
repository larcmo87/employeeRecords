<?php
	include("sql.php");
?>
<!DOCTYPE html>


<html>
<head>
	<title>Update Employee Record</title>
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<!-- Latest compiled and minified Bootstrap CSS library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<div class="create-employee-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header clearfix">						
						<h2>Update Employee Info</h2>											
					</div>
					<form id="newEmployeeForm" action="update.php" method="Post">
						<div class="form-group">
							<label>Emp ID</label>
							<input type="text" id="empId" name="EmpId" class="form-control" value="<?php echo $empId;?>">
						</div>
						<div class="form-group">
							<label>First Name</label>
							<input type="text" id="firstName" name="FirstName" class="form-control" value="<?php echo $firstName;?>">
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" id="lastName" name="LastName" class="form-control" value="<?php echo $lastName;?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" id="email" name="Email" class="form-control" value="<?php echo $email;?>">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" id="phone" name="Phone" class="form-control" value="<?php echo $phone;?>">
						</div>
						<div class="form-group">
							<label>Salary</label>
							<input type="text" id="salary" name="Salary" class="form-control" value="<?php echo $salary;?>">
						</div>
						<a href="sql.php" id="submitUpdateEmployee" class="btn btn-primary"  name="UpdateEmployee">Update</a>
						<a href="index.php" class="btn btn-default">Cancel</a>
					</form>	
					<br><br>
					<span id="submitted"></span>
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

<?php 
if(isset($_POST["Update"])){

		echo "Update working";
}
?>