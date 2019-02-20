<?php
session_start();

// connect to db 'rovdb'
$db = mysqli_connect('localhost', 'root', '', 'rovdb');


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


// initializing variables
$employee_number = "";
$first_name = "";
$middle_initial = "";
$last_name = "";
$job_number = "";

  // insert data in Table 'employee'
  if(isset($_POST['saveEmp'])){
    $employee_number = mysqli_real_escape_string($db,$_POST['employee_number']);
    $first_name  = mysqli_real_escape_string($db,$_POST['first_name']);
    $middle_initial  = mysqli_real_escape_string($db,$_POST['middle_initial']);
    $last_name  = mysqli_real_escape_string($db,$_POST['last_name']);
    $job_number = mysqli_real_escape_string($db,$_POST['job_number']);
    
    $sql  = "INSERT INTO employee (employee_number, first_name, middle_initial, last_name, job_number) 
    	VALUES ('$employee_number', '$first_name', '$middle_initial', '$last_name', '$job_number')";
    $result = mysqli_query($db, $sql);
    header('location: Vemployee.php');
  }

  // update data from Table 'employee'
  if (isset($_POST['updateEmp'])) {
    $employee_number = mysqli_real_escape_string($db, $_POST['employee_number']);
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $middle_initial = mysqli_real_escape_string($db, $_POST['middle_initial']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $job_number = mysqli_real_escape_string($db, $_POST['job_number']);

    $sql = "UPDATE employee SET employee_number='$employee_number', first_name='$first_name', middle_initial='$middle_initial', last_name='$last_name', job_number='$job_number'
      WHERE employee_number='$employee_number'";
    mysqli_query($db, $sql);
    header('location: Vemployee.php');
  }


// initializing variables
$employee_number = "";
$salary_emp = "";
$time_stamp = "";

  // insert to Table 'salary'
  if (isset($_POST['saveSal'])) {
    $employee_number = mysqli_real_escape_string($db, $_POST['employee_number']);
    $salary_emp = mysqli_real_escape_string($db, $_POST['salary_emp']);
    $time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);

    $sql = "INSERT INTO salary (employee_number, salary_emp, time_stamp) 
      VALUES ('$employee_number', '$salary_emp', '$time_stamp')";
    mysqli_query($db, $sql);
    header('location: Vsalary.php');
  }

  // update data from Table 'salary'
  if (isset($_POST['updateSal'])) {
    $employee_number = mysqli_real_escape_string($db, $_POST['employee_number']);
    $salary_emp = mysqli_real_escape_string($db, $_POST['salary_emp']);
    $time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);

    $sql = "UPDATE salary SET employee_number='$employee_number', salary_emp='$salary_emp', time_stamp='$time_stamp'
      WHERE employee_number='$employee_number'";
    mysqli_query($db, $sql);
    header('location: Vsalary.php');
  }



?>