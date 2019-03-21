<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('services.php'); ?>
<h1>Services</h1>
	<form action = "Vser.php" method = "post">
		<div>
				<input type="hidden" name="services_code" value="<?php echo $services_code; ?>" placeholder="Enter Code" required><br>
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $description; ?>" placeholder="Enter Description" required><br>

			<label>Amount: </label>
				<input type="number" name="amount" value="<?php echo $amount; ?>" placeholder="Enter Amount" required><br>
		</div><br>
		<div>
			<button type="submit" name="save">Save</button>
			<button type="submit"><a href="Vser.php">View</a></button>
		</div>
	</form>
</body>
</html>

