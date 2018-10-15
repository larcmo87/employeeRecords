<?php 
$ServerName="localhost";
$UserName="root";
$Password="";
$DateBaseName="employee";

$conn = mysqli_connect($ServerName,$UserName,$Password,$DateBaseName);

//check the connection
if(!$conn){
	die("The database connection failed: ". mysqli_connect_error());
}

?>