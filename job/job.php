<?php

// initializing variables
$job_number = "";
$employee_job = "";

	// insert to Table 'job'
	if (isset($_POST['saveJob'])) {
		$job_number = mysqli_real_escape_string($db, $_POST['job_number']);
    	$employee_job = mysqli_real_escape_string($db, $_POST['employee_job']);
		
		$sql = "INSERT INTO job (job_number, employee_job) 
			VALUES ('$job_number', '$employee_job')";
		mysqli_query($db, $sql);
    header('location: Vjob.php');
	}

	// update data from Table 'job'
	if (isset($_POST['updateJob'])) {
		$job_number = mysqli_real_escape_string($db, $_POST['job_number']);
		$employee_job = mysqli_real_escape_string($db, $_POST['employee_job']);

		$sql = "UPDATE job SET job_number='$job_number', employee_job='$employee_job'
			WHERE job_number='$job_number'";
		mysqli_query($db, $sql);
		header('location: Vjob.php');
	}

?>