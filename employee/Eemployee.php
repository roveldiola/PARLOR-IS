<?php include ('../connector/connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM job";
	$result = mysqli_query($db, $query);
	$sql = "SELECT * FROM employee WHERE employee_number = '$id'";
	$result1 = mysqli_query($db, $sql);
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
	<form class="container" action = "Vemployee.php" method = "post">
		<?php 
			if(mysqli_num_rows($result1)) {
				while($row1 = mysqli_fetch_array($result1)) {
		?>
		<div class="form-group">
			<label>Employee Number: </label>
				<input type="number" name="employee_number" value="<?php echo $row1['employee_number']; ?>" readonly>
		</div>
		<div class="form-group">
			<label>First Name: </label>
				<input type="text" name="first_name" value="<?php echo $row1['first_name']; ?>" required>
		</div>
		<div class="form-group">
			<label>Middle Initial: </label>
				<input type="text" name="middle_initial" value="<?php echo $row1['middle_initial']; ?>" required>
		</div>
		<div class="form-group">
			<label>Last Name: </label>
				<input type="text" name="last_name" value="<?php echo $row1['last_name']; ?>" required>
		</div>
		<div class="form-group">
			<label>Job Number: </label>
				<select name="job_number">
				<option> </option>		
				<?php
				if(mysqli_num_rows($result)){
					while($row = mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $row['job_number']; ?>" <?php if($row['job_number'] == $row1['job_number']) echo "selected"; ?> ><?php echo $row['employee_job']; ?></option>
				<?php
						}
					}
				?>
				</select>
		</div>
		<?php
				}
			}
		?>
			<button type="button" class="btn btn-outline-primary" name="updateEmp">Update</button>
			<a class="btn btn-outline-primary" href="Vemployee.php">Back<a/>
	</form>
</center>
</body>
</html>

