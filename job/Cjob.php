<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('job.php'); ?>
<h1>Job</h1>
	<form action = "Vjob.php" method = "post">
		<div>
			<input type="hidden" name="job_number" value="<?php echo $job_number; ?>" required>
			<label>Employee Job: </label>
			<input type="text" name="employee_job" placeholder="Enter Job" value="<?php echo $employee_job; ?>" required>
		</div><br>
		<div>
			<button type="submit" name="saveJob">Save</button>
			<button type="submit"><a href="Vjob.php">View</a></button>
		</div>
	</form>
</body>
</html>

