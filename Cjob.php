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
			<label></label>
		</div>
		<div>
			<label>Employee Job: </label>
			<input type="text" name="employee_job" placeholder="Enter Job" value="<?php echo $employee_job; ?>" required><br>
		</div>
		<br>
		<div>
			<button type="submit" name="saveJob">Save</button>
			<button type="button"> <a href="Vjob.php">View Job</a></button><br><br>
			<button type="button"> <a href="Cemployee.php">Create Employee</a></button>
			<button type="button"> <a href="Vemployee.php">View Employee</a></button>
		</div>
	</form>

</body>
</html>

