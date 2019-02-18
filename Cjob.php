<?php
include ('connector.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>

</head>
<body>
<h1>Job</h1>
	<form action = "Vjob.php" method = "post">
	<div>
		<label>Job Number: </label>
		<input type="number" name="job_number" placeholder="Enter Number" value="<?php echo $job_number; ?>" required><br>
	</div>
	<div>
		<label>Employee Job: </label>
		<input type="text" name="employee_job" placeholder="Enter Job" value="<?php echo $employee_job; ?>" required><br>
	</div>
	<br>
	<div>
		<button type="submit" name="saveJob">Save</button>
		<button type="button"> <a href="Vjob.php">View Section</a></button>
	</div>
	</form>

</body>
</html>

