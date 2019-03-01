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
			<label>Employee Job: </label>
			<input type="text" name="employee_job" placeholder="Enter Job" value="<?php echo $employee_job; ?>" required><br>
		</div><br>
			<button type="submit" name="saveJob">Save</button>
			<button type="submit"> <a href="Vjob.php">View Job</a></button>
	</form>

</body>
</html>

