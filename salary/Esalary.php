<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM employee, salary WHERE employee.employee_number = salary.employee_number AND salary.salary_id = '$id'";
	$result2 = mysqli_query($db, $query);
	$row2 = mysqli_fetch_array($result2);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('salary.php'); ?>
<h1>Salary</h1>
	<form action = "Vsalary.php" method = "post">
		<div>
				<input type="hidden" name="salary_id" value="<?php echo $row2['salary_id']; ?>" >
			<label>Employee Name: </label>
				<input type="text" name="employee_number" value="<?php echo $row2['first_name'];?>" required readonly><br>
			<label>Salary: </label>
				<input type="number" name="salary_emp" value="<?php echo $row2['salary_emp']; ?>" required>
				<input type="hidden" name="time_stamp" value="<?php echo $row2['time_stamp']; ?>" >
		</div><br>
		<div>
			<button type="submit" name="updateSal">Update</button>
			<button type="submit"> <a href="Vsalary.php">Back<a/></button>
		</div>
	</form>
</body>
</html>

