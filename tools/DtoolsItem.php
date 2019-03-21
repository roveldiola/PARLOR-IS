<?php include('../connector/connector.php'); 

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM tools_item WHERE id_item = '$id'";
	mysqli_query($db, $query);
	header('location: VtoolsItem.php');