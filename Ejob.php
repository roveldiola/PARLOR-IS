<?php 
	include('connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM job WHERE job_number = '$id'";
	$result	= mysqli_query($db, $sql);
	if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result)){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<h1>Job</h1>
	<form action="Vjob.php" method="post">
		<div>
			<label>Job Number: </label>
			<input type="number" name="job_number" value="<?php echo $row['job_number']; ?>" required>
		</div>
		<div>
			<label>Employee Job: </label>
			<input type="text" name="employee_job" value="<?php echo $row['employee_job']; ?>" required>
		</div>
		<?php 
				}
			}
		?>
		<br>
		<button type="submit" name="updateJob">Update</button>
		<button type="submit"> <a href="Vjob.php">Back<a/></button>
	</form>
	

	
</body>
</html>