<?php include('../connector/connector.php');
	
	$edit = $_GET['edit'];
	$query = "SELECT * FROM employee, tools_emp, tools_item WHERE employee.employee_number = tools_emp.employee_number AND tools_item.id_item = tools_emp.id_item AND tools_emp.id='$edit'";
	$result	= mysqli_query($db, $query);
	if(mysqli_num_rows($result)) {
		while($row = mysqli_fetch_array($result)) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('toolsEmp.php'); ?>
<h1>Tools Item</h1>
	<form action="VtoolsEmp.php" method="post">
		<div>
			<label>ID: </label>
				<input type="number" name="id" value="<?php echo $row['id']; ?>" readonly><br>
			<label>Employee Name: </label>
				<select name="employee_number">
				<option value="<?php echo $row['employee_number']; ?>" <?php if($row['employee_number'] == $row['employee_number']) echo "selected"; ?> ><?php echo $row['first_name']; ?></option>
				</select><br>
			<label>Description: </label>
				<select name="id_item">
				<option value="<?php echo $row['id_item']; ?>" <?php if($row['id_item'] == $row['id_item']) echo "selected"; ?> ><?php echo $row['description']; ?></option>
				</select><br>
			<label>Quantity: </label>
				<input type="text" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
				<input type="hidden" name="time_stamp" value="<?php echo $row['time_stamp']; ?>" required>
			<?php 
					}
				}
			?>
		</div><br>
		<div>
			<button type="submit" name="updateToolsEmp">Update</button>
			<button type="submit"><a href="VtoolsEmp.php">Back<a/></button>
		</div>
	</form>
</body>
</html>