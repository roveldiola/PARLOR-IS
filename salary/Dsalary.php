<?php include('../connector/connector.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM salary WHERE salary_id = '$id'";
	mysqli_query($db, $query);
	header('location: Vsalary.php');
	