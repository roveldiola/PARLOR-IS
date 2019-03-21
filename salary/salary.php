<?php 

// initializing variables
$salary_id = "";
$employee_number = "";
$salary_emp = "";
$time_stamp = "";

  // insert to Table 'salary'
  if (isset($_POST['saveSal'])) {
    $salary_id = mysqli_real_escape_string($db, $_POST['salary_id']);
    $employee_number = mysqli_real_escape_string($db, $_POST[
    'employee_number']);
    $salary_emp = mysqli_real_escape_string($db, $_POST['salary_emp']);
    $time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);

    $sql = "INSERT INTO salary (employee_number, salary_emp) 
      VALUES ('$employee_number', '$salary_emp')";
    mysqli_query($db, $sql);
    header('location: Vsalary.php');
  }

  // update data from Table 'salary'
  if (isset($_POST['updateSal'])) {
    $salary_id = mysqli_real_escape_string($db, $_POST['salary_id']);
    $employee_number = mysqli_real_escape_string($db, $_POST['employee_number']);
    $salary_emp = mysqli_real_escape_string($db, $_POST['salary_emp']);
    $time_stamp = mysqli_real_escape_string($db, $_POST['time_stamp']);

    $sql = "UPDATE salary SET salary_id='$salary_id', salary_emp='$salary_emp'  
      WHERE salary.salary_id='$salary_id'";
    mysqli_query($db, $sql);
    header('location: Vsalary.php');
  }

?>