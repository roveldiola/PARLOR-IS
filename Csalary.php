<?php
include ('connector.php');

	$sql = "SELECT * FROM employee";
	$result = mysqli_query($db, $sql);


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
			<select name="employee_number">
				<?php
					if(mysqli_num_rows($result)){
						while($row = mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $row['employee_number'];?>"><?php echo $row['first_name'];?></option>
				<?php
						}
					}
				?>
				
			</select>
		</div>
		<div>
			<label>Salary: </label>
			<input type="text" name="salary_emp" placeholder="Enter Salary" value="<?php echo $salary_emp; ?>" required><br>
		</div>
		<div>
			<label>Time Stamp: </label>
			<input type="time" name="time_stamp" placeholder="Enter Time Stamp" value="<?php echo $time_stamp; ?>" required><br>
		</div>
		<br>
		<div>
			<button type="submit" name="saveJob">Save</button>
			<button type="button"> <a href="Vsalary.php">View Salary</a></button>
		</div>
	</form>

</body>
</html>

