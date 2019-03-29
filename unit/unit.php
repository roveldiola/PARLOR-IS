<?php

// initializing variables
$unit = "";

	// insert to Table 'tools_item'
	if (isset($_POST['saveUnit'])) {
    	$unit = mysqli_real_escape_string($db, $_POST['unit']);
		
		$sql = "INSERT INTO unit_table (unit)
			VALUES ('$unit')";
		mysqli_query($db, $sql);
    	header('location: Vunit.php');
	}