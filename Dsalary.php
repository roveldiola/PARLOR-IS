<?php include('connector.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM salary WHERE employee_number = '$id'";
	mysqli_query($db, $query);
	header('location: Vsalary.php');
	