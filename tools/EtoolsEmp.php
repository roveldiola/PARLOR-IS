<?php include('../connector/connector.php');
	
	$edit = $_GET['edit'];
	$query = "SELECT * FROM employee, tools_emp, tools_item WHERE employee.employee_number = tools_emp.employee_number AND tools_item.id_item = tools_emp.id_item AND tools_emp.id='$edit'";
	$result	= mysqli_query($db, $query);
	if(mysqli_num_rows($result)) {
		while($row = mysqli_fetch_array($result)) {
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
<?php include('toolsEmp.php'); ?>
<center>
<h1>Tools Item</h1>
	<form class="container" action="VtoolsEmp.php" method="post">
		<div class="form-group">
			<label>ID: </label>
				<input type="number" name="id" value="<?php echo $row['id']; ?>" readonly>
		</div>
		<div class="form-group">
			<label>Employee Name: </label>
				<select name="employee_number">
				<option value="<?php echo $row['employee_number']; ?>" <?php if($row['employee_number'] == $row['employee_number']) echo "selected"; ?> ><?php echo $row['first_name']; ?></option>
				</select>
		</div>
		<div class="form-group">
			<label>Description: </label>
				<select name="id_item">
				<option value="<?php echo $row['id_item']; ?>" <?php if($row['id_item'] == $row['id_item']) echo "selected"; ?> ><?php echo $row['description']; ?></option>
				</select>
		</div>
		<div class="form-group">
			<label>Quantity: </label>
				<input type="text" name="quantity" value="<?php echo $row['quantity']; ?>" required>
				<input type="hidden" name="time_stamp" value="<?php echo $row['time_stamp']; ?>" required>
			<?php 
					}
				}
			?>
		</div>
		<button type="submit" name="updateToolsEmp">Update</button>
		<a href="VtoolsEmp.php">Back<a/></button>
	</form>
</center>
</body>
</html>