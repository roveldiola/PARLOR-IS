<?php

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
    if($result == true) {
      header('location: Vemployee.php');
    }
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

?>