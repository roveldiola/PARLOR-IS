<?php
include ('connector.php');

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
<h1>Salary</h1>
	<form action = "Vsalary.php" method = "post">
		<div>
			<label>Employee Name: </label>
			<b><?php echo $row2['first_name']; ?></b>
		</div>
		<div>
			<label>Salary: </label>
			<input type="number" name="salary_emp" value="<?php echo $row2['salary_emp']; ?>" required>
		</div><br>
		<div>
			<button type="submit" name="updateSal">Update</button>
			<button type="submit"> <a href="Vsalary.php">Back<a/></button>
		</div>
	</form>
</body>
</html>

