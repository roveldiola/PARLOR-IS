<?php
include ('connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM employee";
	$result = mysqli_query($db, $query);
	$sql = "SELECT * FROM salary WHERE employee_number = '$id'";
	$result2 = mysqli_query($db, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>

</head>
<body>
<h1>Salary</h1>
	<form action = "Vsalary.php" method = "post">
		<?php 
			if(mysqli_num_rows($result2)) {
				while($row1 = mysqli_fetch_array($result2)) {
		?>
		<div>
		<label>Employee Name: </label>
		<select name="employee_number">
			<?php
				if(mysqli_num_rows($result)){
					while($row = mysqli_fetch_array($result)){
			?>
			<option value="<?php echo $row['employee_number'];?>" selected><?php echo $row['first_name'];?></option>
			<?php
					}
				}
			?>
			
		</select>
		</div>
		<div>
			<label>Salary: </label><br>
			<input type="text" name="salary_emp" value="<?php echo $row1['salary_emp']; ?>" required><br>
		</div>
		<div>
			<label>Time Stamp: </label><br>
			<input type="text" name="time_stamp" value="<?php echo $row1['time_stamp']; ?>" required><br>
		</div>
		<br>
		<div>
			<button type="submit" name="updateSal">Update</button>
			<button type="button"> <a href="Vsalary.php">Back<a/></button>
		</div>
	</form>

</body>
</html>

