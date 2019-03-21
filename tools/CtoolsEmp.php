<?php include('../connector/connector.php');

	$sql = "SELECT * FROM employee";
	$result = mysqli_query($db, $sql);
	$query = "SELECT * FROM tools_item";
	$result1 = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('toolsEmp.php'); ?>
<h1>Tools Employee</h1>
	<form action = "VtoolsEmp.php" method = "post">
		<div>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Employee Name: </label>
				<select name="employee_number">
				<option> </option>
				<?php
					if(mysqli_num_rows($result)){
						while($row = mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $row['employee_number']; ?>"><?php echo $row['first_name']; ?></option>
				<?php
						}
					}
				?>
				</select><br>
			<label>ID No.: </label>
				<select name="id_item">
				<option> </option>
				<?php
					if(mysqli_num_rows($result)){
						while($row1 = mysqli_fetch_array($result1)){
				?>
				<option value="<?php echo $row1['id_item']; ?>"><?php echo $row1['description']; ?></option>
				<?php
						}
					}
				?>
				</select><br>
			<label>Quantity: </label>
				<input type="number" name="quantity" value="<?php echo $quantity; ?>" placeholder="Enter Quantity" required><br>
				<input type="hidden" name="time_stamp" value="<?php echo $time_stamp; ?>" >

		</div><br>
		<div>
			<button type="submit" name="saveToolsEmp">Save</button>
			<button type="submit"><a href="VtoolsEmp.php">View</a></button>
		</div>
	</form>
</body>
</html>

