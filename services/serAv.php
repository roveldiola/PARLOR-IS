<?php

// initializing variables
$receipt_no = "";
$services_code = "";

	// insert to Table 'services_items'
	if (isset($_POST['saveAv'])) {
		$receipt_no = mysqli_real_escape_string($db, $_POST['receipt_no']);

		$sql = "INSERT INTO services_items (receipt_no, services_code)
			VALUES ('$receipt_no', '$services_code')";
		mysqli_query($db, $sql);
    	//header('location: VserAv.php');
	}


/*
	// update data from Table 'services_availed'
	if (isset($_POST['updateAv'])) {
		$receipt_no = mysqli_real_escape_string($db, $_POST['receipt_no']);
    	$customer_id = mysqli_real_escape_string($db, $_POST['customer_id']);
    	$date = mysqli_real_escape_string($db, $_POST['date']);

		$sql = "UPDATE services_availed SET receipt_no='$receipt_no', customer_id='$customer_id', date='$date'
			WHERE services_availed.receipt_no='$receipt_no'";
		mysqli_query($db, $sql);
		header('location: VserAv.php');
	}
*/

?>