<?php

// initializing variables
$id_item = "";
$time_stamp = "";
$description = "";
$amount = "";
$quantityItem = "";
$unit = "";

	// insert to Table 'tools_item'
	if (isset($_POST['saveToolsItems'])) {
		$id_item = mysqli_real_escape_string($db, $_POST['id_item']);
    	$time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);
    	$description = mysqli_real_escape_string($db, $_POST['description']);
    	$amount = mysqli_real_escape_string($db, $_POST['amount']);
    	$quantityItem = mysqli_real_escape_string($db, $_POST['quantityItem']);
    	$unit = mysqli_real_escape_string($db, $_POST['unit']);
		
		$sql = "INSERT INTO tools_item (id_item, description, amount, quantityItem, unit)
			VALUES ('$id_item', '$description', '$amount', '$quantityItem', '$unit')";
		mysqli_query($db, $sql);
    	header('location: VtoolsItem.php');
	}

	// update data from Table 'tools_item'
	if (isset($_POST['updateToolsItem'])) {
		$id_item = mysqli_real_escape_string($db, $_POST['id_item']);
    	$time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);
    	$description = mysqli_real_escape_string($db, $_POST['description']);
    	$amount = mysqli_real_escape_string($db, $_POST['amount']);
    	$quantityItem = mysqli_real_escape_string($db, $_POST['quantityItem']);
    	$unit = mysqli_real_escape_string($db, $_POST['unit']);

		$sql = "UPDATE tools_item SET id_item='$id_item', time_stamp='$time_stamp', description='$description', amount='$amount', quantityItem='$quantityItem', unit='$unit'
			WHERE id_item='$id_item'";
		mysqli_query($db, $sql);
		header('location: VtoolsItem.php');
	}

?>