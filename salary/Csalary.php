<?php include('../connector/connector.php');

	$sql = "SELECT * FROM employee";
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
<?php include('salary.php'); ?>
<center>
<h1>Salary</h1>
	<form class="container" action = "Vsalary.php" method = "post">
		<div class="form-group">
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
				</select>
		</div>
		<div class="form-group">
			<label>Salary: </label>
				<input type="number" name="salary_emp" placeholder="Enter Salary" value="<?php echo $salary_emp; ?>" required>
				<input type="hidden" name="time_stamp" value="<?php echo $time_stamp; ?>" >
		</div>
			<button type="button" class="btn btn-outline-primary" name="saveSal">Save</button>
			<a class="btn btn-outline-primary" href="Vsalary.php">View</a></button>
	</form>
</center>	
</body>
</html>

