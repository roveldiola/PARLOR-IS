<?php

	// insert to Table 'services_items'
	if (isset($_POST['save'])) {

		$sql = "INSERT INTO services_items (services_code)
			VALUES ('$services_code')";
		mysqli_query($db, $sql);
		echo "save";
    	//header('location: VserAv.php');
	}

?>