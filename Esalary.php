<?php
include ('connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM employee, salary WHERE employee.employee_number = salary.employee_number AND salary.salary_id = '$id'";
	$result2 = mysqli_query($db, $query);
	$row2 = mysqli_fetch_array($result2);
	/*$sql = "SELECT * FROM salary WHERE salary_id = '$id'";
	$result2 = mysqli_query($db, $sql);*/

?>


<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>

</head>
<body>
<h1>Salary</h1>
	<?php 
		/*if(mysqli_num_rows($result2)) {
			while($row2 = mysqli_fetch_array($result2)) {*/
	?>
	<form action = "Vsalary.php" method = "post">
		<div>
			<label>Employee Name: </label>
			<input type="text" name="first_name" value="<?php echo $row2['first_name']; ?>" required>
		</div>
		<div>
			<label>Salary: </label>
			<input type="number" name="salary_emp" value="<?php echo $row2['salary_emp']; ?>" required>
		</div>
		<?php
					/*}
				}*/
		?>
		<br>
		<div>
			<button type="submit" name="updateSal">Update</button>
			<button type="button"> <a href="Vsalary.php">Back<a/></button>
		</div>
	</form>

</body>
</html>

