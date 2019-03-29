<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM job WHERE job_number = '$id'";
	$result	= mysqli_query($db, $sql);
	if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result)){
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
<?php include('job.php'); ?>
<center>
	<h1>Job</h1>
	<form class="container" action="Vjob.php" method="post">
		<div class="form-group">
			<label>Job Number: </label>
			<input type="number" name="job_number" value="<?php echo $row['job_number']; ?>" required readonly>
		</div>
		<div class="form-group">
			<label>Employee Job: </label>
			<input type="text" name="employee_job" value="<?php echo $row['employee_job']; ?>" required><br>
		</div>
		<?php 
				}
			}
		?>
		<button type="button" class="btn btn-outline-primary" name="updateJob">Update</button>
		<a class="btn btn-outline-primary" href="Vjob.php">Back<a/></button>
	</form>
</center>
</body>
</html>