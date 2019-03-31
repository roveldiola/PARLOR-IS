<?php include('../connector/connector.php'); ?>

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
<?php include('services.php'); ?>
<center>
<h1>Services</h1>
	<form class="container" action = "Vser.php" method = "post">
		<div class="form-group">
				<input type="hidden" name="services_code" value="<?php echo $services_code; ?>" required>
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $description; ?>" placeholder="Enter Description" required>
		</div>
		<div class="form-group">
			<label>Amount: </label>
				<input type="number" name="amount" value="<?php echo $amount; ?>" placeholder="Enter Amount" required>
		</div>
		<button type="submit" class="btn btn-outline-primary" name="save">Save</button>
		<a class="btn btn-outline-primary" href="Vser.php">View</a>
	</form>
</center>
</body>
</html>

