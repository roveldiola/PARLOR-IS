<?php include('../connector/connector.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM customer WHERE customer_id = '$id'";
	mysqli_query($db, $query);
	header('location: Vcustomer.php');