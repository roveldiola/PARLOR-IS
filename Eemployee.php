<?php
include ('connector.php');

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
<h2>Employee</h2>
	<form action = "Vemployee.php" method = "post">
		<?php 
			if(mysqli_num_rows($result1)){
				while($row1 = mysqli_fetch_array($result1)) {
		?>
		<div>
			<label>Employee Number: </label><br>
			<input type="number" name="employee_number" value="<?php echo $row1['employee_number']; ?>" required><br>
		</div>
		<div>
			<label>First Name: </label><br>
			<input type="text" name="first_name" value="<?php echo $row1['first_name']; ?>" required><br>
		</div>
		<div>
			<label>Middle Initial: </label><br>
			<input type="text" name="middle_initial" value="<?php echo $row1['middle_initial']; ?>" required><br>
		</div>
		<div>
			<label>Last Name: </label><br>
			<input type="text" name="last_name" value="<?php echo $row1['last_name']; ?>" required><br>
		</div>
		<div>
			<label>Job Number: </label><br>
			<select name="job_number" value="<?php echo $row1['job']; ?>">
			<?php
				if(mysqli_num_rows($result)){
					while($row = mysqli_fetch_array($result)){
			?>
			<option value="<?php echo $row['job_number']; ?>" selected><?php echo $row['employee_job']; ?></option>
			<?php
						}
					}
				}
			}
				?>
			</select>
		</div><br>
		<div>
			<button type="submit" name="updateEmp">Update</button>
			<button type="button"> <a href="Vemployee.php">Back<a/></button>
		</div>
	</form>

</body>
</html>

