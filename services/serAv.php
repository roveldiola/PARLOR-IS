<?php

// initializing variables
$receipt_no = "";
$services_code = "";

	// insert to Table 'services_items'
	if (isset($_POST['save'])) {
		$receipt_no = mysqli_real_escape_string($db, $_POST['receipt_no']);

		$sql = "INSERT INTO services_items (receipt_no, services_code)
			VALUES ('$receipt_no', '$services_code')";
		mysqli_query($db, $sql);
		echo "save";
    	//header('location: VserAv.php');
	}

?>