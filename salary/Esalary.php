<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM employee, salary WHERE employee.employee_number = salary.employee_number AND salary.salary_id = '$id'";
	$result2 = mysqli_query($db, $query);
	$row2 = mysqli_fetch_array($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parlor IS</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include('salary.php'); ?>
<center>
<h1>Salary</h1>
	<form class="container" action = "Vsalary.php" method = "post">
		<div class="form-group">
				<input type="number" name="salary_id" value="<?php echo $row2['salary_id']; ?>" hidden>
			<label>Employee Name: </label>
				<input type="text" name="employee_number" value="<?php echo $row2['first_name'];?>" readonly>
		</div>
		<div class="form-group">
			<label>Salary: </label>
				<input type="number" name="salary_emp" value="<?php echo $row2['salary_emp']; ?>" required>
				<input type="hidden" name="time_stamp" value="<?php echo $row2['time_stamp']; ?>" >
		</div>
		<button type="submit" class="btn btn-outline-primary" name="updateSal">Update</button>
		<a class="btn btn-outline-primary" href="Vsalary.php">Back<a/></button>
	</form>
</center>
</body>
</html>

