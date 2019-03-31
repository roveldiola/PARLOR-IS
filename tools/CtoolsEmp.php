<?php include('../connector/connector.php');

	$sql = "SELECT * FROM employee";
	$result = mysqli_query($db, $sql);
	$query = "SELECT * FROM tools_item";
	$result1 = mysqli_query($db, $query);
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
<h1>Tools Employee</h1>
	<form class="container" action = "VtoolsEmp.php" method = "post">
		<div class="form-group">
				<input type="number" name="id" value="<?php echo $id; ?>" hidden>
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
				</select>
		</div>
		<div class="form-group">
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
				</select>
		</div>
		<div class="form-group">
			<label>Quantity: </label>
				<input type="number" name="quantity" value="<?php echo $quantity; ?>" placeholder="Enter Quantity" required>
				<input type="hidden" name="time_stamp" value="<?php echo $time_stamp; ?>" required>
		</div>
			<button type="submit" class="btn btn-outline-primary" name="saveToolsEmp">Save</button>
			<a class="btn btn-outline-primary" href="VtoolsEmp.php">View</a>
	</form>
</center>
</body>
</html>

