<?php include('../connector/connector.php');

	$del 	= $_GET['del'];
	$query 	= "DELETE FROM tools_emp WHERE id = '$del'";
	mysqli_query($db, $query);
	header('location: VtoolsEmp.php');
	