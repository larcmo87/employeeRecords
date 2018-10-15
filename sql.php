<?php
include("dbConnection.php");

	if(isset($_POST["sqlType"])){
		
		//If new employee insert do...
		if($_POST["sqlType"] == 'newEmployee'){
			$FirstName = $_POST["firstName"];
			$LastName = $_POST["lastName"];
			$Email = $_POST["email"];
			$Phone = $_POST["phone"];
			$Salary = $_POST["salary"];

			//Insert new employee data into employee_record table
			$SQLInsert = "INSERT INTO employee_record (firstName,lastName,email,phone,salary) VALUES ('$FirstName', '$LastName', '$Email', '$Phone', $Salary)";

			if(mysqli_query($conn, $SQLInsert)){
				
				//close connection
				mysqli_close($conn);
				exit("$FirstName $LastName was successfully added");
				
			}else{
				exit("Error: ".$SQL."<br>". mysqli_error($conn));
			}	
		}//End new employee		

		//do if selecting all employees
		if($_POST["sqlType"] == 'getEmployeeData'){
			//get all employee records
			$SQLFetch = "SELECT * FROM employee_record";

			//id connection worked then do
			if(mysqli_query($conn,$SQLFetch)){

				//query results
				$result = mysqli_query($conn,$SQLFetch);
				
				$response = "";

				//loop through query array and concatenate results to variable $response
				//$response value will be appended to table in the index.php to show all employees in table
				while($employeeData=mysqli_fetch_array($result,MYSQLI_NUM)){
					echo $employeeData[0];
					$response .='
						<tr>
							<td>'.$employeeData[0].'</td>
							<td>'.$employeeData[1].'</td>
							<td>'.$employeeData[2].'</td>
							<td>'.$employeeData[3].'</td>
							<td>'.$employeeData[4].'</td>
							<td>'.$employeeData[5].'</td>
							<td>								
								<a href="view.php?viewid='.$employeeData[0].'" id="viewEmp" title="View Record"><span class="glyphicon glyphicon-eye-open"></span></a>
								<a href="update.php?updateid='.$employeeData[0].'" id="updateEmp" title="Update Record"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="sql.php?deleteid='.$employeeData[0].'" id="deleteEmp" title="Delete Record"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>';
				}//end of while
				
				//de-allocate memory
				mysqli_free_result($result);
				//close connection
				mysqli_close($conn);
				exit($response);
				
			}else{
				//de-allocate memory
				mysqli_free_result($result);
				//close connection
				mysqli_close($conn);

				exit("Error: ".$SQL."<br>". mysqli_error($conn));
			}	
		}//End of get all employees

		//If updating employee info do..
		if($_POST["sqlType"] == 'updateEmployee'){		
			//values passed in ajax data
			$EmpId = $_POST['empId'];		
			$FirstName = $_POST["firstName"];
			$LastName = $_POST["lastName"];
			$Email = $_POST["email"];
			$Phone = $_POST["phone"];
			$Salary = $_POST["salary"];
			$SQLUpdate = "UPDATE employee_record SET firstName='$FirstName',lastName='$LastName',email='$Email',phone='$Phone',salary='$Salary' WHERE id = '$EmpId'";
			if(mysqli_query($conn, $SQLUpdate)){
				//close connection
				mysqli_close($conn);
				exit("Record updated for $FirstName $LastName");
			}
	}
								
	}// End of isset($_POST["sqlType"]



	//do if selecting individual employee info
		if(isset($_GET["viewid"])){

			$employeeId = $_GET['viewid'];
								
				//select employee record where employee id equals the url parameter viewid value
				$SQLSingleRecord = "SELECT * FROM employee_record WHERE id = '$employeeId'";

				if(mysqli_query($conn, $SQLSingleRecord )){
					$result = mysqli_query($conn, $SQLSingleRecord);

					//capture individual employee info and store in varibales
					//variables will be used in view.php
					while($dataRow=mysqli_fetch_array($result)){
						$empId=$dataRow[0];
						$firstName=$dataRow[1];
						$lastName=$dataRow[2];
						$email=$dataRow[3];
						$phone=$dataRow[4];
						$salary=$dataRow[5];
					}//end of while

				//de-allocate memory
				mysqli_free_result($result);
				//close connection
				mysqli_close($conn);				
				
			}else{
				exit("Error: ".$SQLSingleRecord."<br>". mysqli_error($conn));
			}
		}

		//get selected employee data for update
		if(isset($_GET["updateid"])){
								
				$employeeId = $_GET['updateid'];
												
				//select employee record where employee id equals the url parameter updateid value
				$SQLSingleRecord = "SELECT * FROM employee_record WHERE id = '$employeeId'";

				if(mysqli_query($conn, $SQLSingleRecord )){
					$result = mysqli_query($conn, $SQLSingleRecord);
					
					//capture individual employee info and store in varibales
					//variables will be used in view.php
					while($dataRow=mysqli_fetch_array($result)){
						$empId=$dataRow[0];
						$firstName=$dataRow[1];
						$lastName=$dataRow[2];
						$email=$dataRow[3];
						$phone=$dataRow[4];
						$salary=$dataRow[5];
					}//end of while

					//echo $firstName;
				//de-allocate memory
				mysqli_free_result($result);
				//close connection
				mysqli_close($conn);
				
				//header("location: update.php");
			}else{

				exit("Error: ".$SQLSingleRecord."<br>". mysqli_error($conn));
			}	

		}


		//delete employee record
		if(isset($_GET["deleteid"])){
								
				$employeeId = $_GET['deleteid'];
												
				//Delete employee record where employee id equals the url parameter deleteid value
				$SQLDeleteRecord= "DELETE FROM employee_record WHERE id = '$employeeId'";

				if(mysqli_query($conn, $SQLDeleteRecord )){
										
					//close connection
					mysqli_close($conn);

					//redirect to index.php
					header("location: index.php");
				
				}else{
					exit("Error: ".$SQLSingleRecord."<br>". mysqli_error($conn));
				}	

		}

?>

 
		