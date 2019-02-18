<?php include('connector.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM employee WHERE employee_number = '$id'";
	mysqli_query($db, $query);
	header('location: Vemployee.php');
	