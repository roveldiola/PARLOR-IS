<?php include ('../connector/connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM job";
	$result = mysqli_query($db, $query);
	$sql = "SELECT * FROM employee WHERE employee_number = '$id'";
	$result1 = mysqli_query($db, $sql);
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
		<?php 
			if(mysqli_num_rows($result1)) {
				while($row1 = mysqli_fetch_array($result1)) {
		?>
		<div>
			<label>Employee Number: </label>
			<input type="number" name="employee_number" value="<?php echo $row1['employee_number']; ?>" required readonly><br>
			<label>First Name: </label>
			<input type="text" name="first_name" value="<?php echo $row1['first_name']; ?>" required><br>
			<label>Middle Initial: </label>
			<input type="text" name="middle_initial" value="<?php echo $row1['middle_initial']; ?>" required><br>
			<label>Last Name: </label>
			<input type="text" name="last_name" value="<?php echo $row1['last_name']; ?>" required><br>
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
		</div><br>
		<?php
				}
			}
		?>
		
		<div>
			<button type="submit" name="updateEmp">Update</button>
			<button type="submit"> <a href="Vemployee.php">Back<a/></button>
		</div>
	</form>
</body>
</html>

