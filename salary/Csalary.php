<?php include('../connector/connector.php');

	$sql = "SELECT * FROM employee";
	$result = mysqli_query($db, $sql);
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
				<input type="hidden" name="salary_id" value="<?php echo $salary_id; ?>" >
			<label>Employee Name: </label>
				<select name="employee_number">
				<option> </option>
					<?php
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_array($result)){
					?>
					<option value="<?php echo $row['employee_number']; ?>"><?php echo $row['first_name']; ?></option>
					<?php
							}
						}
					?>
				</select><br>
			<label>Salary: </label>
				<input type="number" name="salary_emp" placeholder="Enter Salary" value="<?php echo $salary_emp; ?>" required>
				<input type="hidden" name="time_stamp" value="<?php echo $time_stamp; ?>" >
		</div><br>
		<div>
			<button type="submit" name="saveSal">Save</button>
			<button type="submit"> <a href="Vsalary.php">View</a></button>
		</div>
	</form>
</body>
</html>

