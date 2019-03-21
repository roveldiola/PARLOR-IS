<?php include('../connector/connector.php');

	$sql = "SELECT * FROM job";
	$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('employee.php'); ?>
<h1>Employee</h1>
	<form action = "Vemployee.php" method = "post">
		<div>
			<label>Employee Number: </label>
			<input type="number" name="employee_number" placeholder="Enter Number" value="<?php echo $employee_number; ?>" required><br>
			<label>First Name: </label>
			<input type="text" name="first_name" placeholder="Enter Name" value="<?php echo $first_name; ?>" required><br>
			<label>Middle Initial: </label>
			<input type="text" name="middle_initial" placeholder="Enter M.I." value="<?php echo $middle_initial; ?>" required><br>
			<label>Last Name: </label>
			<input type="text" name="last_name" placeholder="Enter Name" value="<?php echo $last_name; ?>" required><br>
			<label>Employee Job: </label>
			<select name="job_number">
			<option> </option>
			<?php
				if(mysqli_num_rows($result)){
					while($row = mysqli_fetch_array($result)){
			?>
			<option value="<?php echo $row['job_number']; ?>"><?php echo $row['employee_job']; ?></option>
			<?php
					}
				}
			?>
			</select>
		</div><br>
		<div>
			<button type="submit" name="saveEmp">Save</button>
			<button type="submit"><a href="Vemployee.php">View</a></button>
		</div>
	</form>
</body>
</html>