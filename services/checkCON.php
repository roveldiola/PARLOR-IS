<?php 

$services_code = "";

	// insert to Table 'services_availed'
	if (isset($_POST['saveAv'])) {
		$receipt_no = mysqli_real_escape_string($db, $_POST['services_code']);

		$sql = "INSERT INTO services (description)
			VALUES ('$description')";
		mysqli_query($db, $sql);
	}

?>