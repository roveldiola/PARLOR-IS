<?php

// initializing variables
$services_code = "";
$description = "";	
$amount = "";

	// insert to Table 'services'
	if (isset($_POST['save'])) {
		$services_code = mysqli_real_escape_string($db, $_POST['services_code']);
    	$description = mysqli_real_escape_string($db, $_POST['description']);
    	$amount = mysqli_real_escape_string($db, $_POST['amount']);
		
		$sql = "INSERT INTO services (services_code, description, amount) 
			VALUES ('$services_code', '$description', '$amount')";
		mysqli_query($db, $sql);
    header('location: Vser.php');
	}

	// update data from Table 'services'
	if (isset($_POST['update'])) {
		$services_code = mysqli_real_escape_string($db, $_POST['services_code']);
    	$description = mysqli_real_escape_string($db, $_POST['description']);
    	$amount = mysqli_real_escape_string($db, $_POST['amount']);

		$sql = "UPDATE services SET services_code='$services_code', description='$description', amount='$amount'
			WHERE services_code='$services_code'";
		mysqli_query($db, $sql);
		header('location: Vser.php');
	}

?>