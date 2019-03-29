<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('unit.php'); ?>
<h1>Unit</h1>
	<form action = "Vunit.php" method = "post">
		<div>
			<label>Unit: </label>
				<input type="text" name="unit" value="<?php echo $unit; ?>" placeholder="Enter Unit" required>
		</div><br>
		<div>
			<button type="submit" name="saveUnit">Save</button>
			<button type="submit"> <a href="Vunit.php">View</a></button>
		</div>
	</form>
</body>
</html>

