<?php include('../connector/connector.php'); 

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM unit_table WHERE unit = '$id'";
	mysqli_query($db, $query);
	header('location: Vunit.php');