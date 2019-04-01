<?php include('../connector/connector.php');

	$sql = "SELECT * FROM job";
	$result = mysqli_query($db, $sql);
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
<?php include('employee.php'); ?>
<center>
<h1>Employee</h1>
	<form class="container" action="Vemployee.php" method="post">
		<div class="form-group">
			<label>Employee Number: </label>
				<input type="number" name="employee_number" placeholder="Enter Number" value="<?php echo $employee_number; ?>" required>
		</div>
		<div class="form-group">
			<label>First Name: </label>
				<input type="text" name="first_name" placeholder="Enter Name" value="<?php echo $first_name; ?>" required>
		</div>
		<div class="form-group">
			<label>Middle Initial: </label>
				<input type="text" name="middle_initial" placeholder="Enter M.I." value="<?php echo $middle_initial; ?>" required>
		</div>
		<div class="form-group">
			<label>Last Name: </label>
				<input type="text" name="last_name" placeholder="Enter Name" value="<?php echo $last_name; ?>" required>
		</div>
		<div class="form-group">
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
		</div>
		<button type="submit" class="btn btn-outline-primary" name="saveEmp">Save</button>
		<a class="btn btn-outline-primary" href="Vemployee.php">View</a>
	</form>
</center>
</body>
</html>