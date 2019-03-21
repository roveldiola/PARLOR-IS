<?php include('../connector/connector.php'); 

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM services WHERE services_code = '$id'";
	mysqli_query($db, $query);
	header('location: Vser.php');