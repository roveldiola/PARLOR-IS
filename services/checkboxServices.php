<?php 

	

// initializing variables
$services_code = "";

	// insert to Table 'services_items'
	if (isset($_POST['saveAv'])) {
		$services_code = mysqli_real_escape_string($db, $_POST['services_code']);
			
		$sql = "INSERT INTO services_items (services_code)
			VALUES ('$services_code')";
		mysqli_query($db, $sql);
    	//header('location: VserAv.php');
	}

 ?>