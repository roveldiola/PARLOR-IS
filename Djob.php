<?php include('connector.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM job WHERE job_number = '$id'";
	mysqli_query($db, $query);
	header('location: Vjob.php');