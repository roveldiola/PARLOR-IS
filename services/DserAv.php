<?php include('../connector/connector.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM services_items WHERE receipt_no = '$id'";
	mysqli_query($db, $query);
	header('location: VserAv.php');
	