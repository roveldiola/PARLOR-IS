<?php

// initializing variables
$id = "";
$employee_number = "";
$id_item = "";
$quantity = "";
$time_stamp = "";


	// insert to Table 'tools_emp'
	if (isset($_POST['saveToolsEmp'])) {
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$employee_number = mysqli_real_escape_string($db, $_POST['employee_number']);
		$id_item = mysqli_real_escape_string($db, $_POST['id_item']);
    	$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
    	$time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);
		
		$sql = "INSERT INTO tools_emp (id, employee_number, id_item, quantity)
			VALUES ('$id', '$employee_number', '$id_item', '$quantity')";
		mysqli_query($db, $sql);
    	header('location: VtoolsEmp.php');
	}

	// update data from Table 'tools_emp'
	if (isset($_POST['updateToolsEmp'])) {
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$employee_number = mysqli_real_escape_string($db, $_POST['employee_number']);
		$id_item = mysqli_real_escape_string($db, $_POST['id_item']);
    	$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
    	$time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);

		$sql = "UPDATE tools_emp SET id='$id', employee_number='$employee_number', id_item='$id_item', quantity='$quantity'
			WHERE tools_emp.id='$id'";
		mysqli_query($db, $sql);
		header('location: VtoolsEmp.php');
	}

?>