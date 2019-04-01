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
<?php include('toolsItem.php'); ?>
<center>
<h1>Tools Item</h1>
	<form class="container" action = "VtoolsItem.php" method = "post">
		<div class="form-group">
			<label>ID No.: </label>
				<input type="number" name="id_item" value="<?php echo $id_item; ?>" placeholder="Enter ID" required>
				<input type="hidden" name="time_stamp" value="<?php echo $time_stamp; ?>" >
		</div>
		<div class="form-group">
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $description; ?>" placeholder="Enter Description" required>
		</div>
		<div class="form-group">
			<label>Amount: </label>
				<input type="number" name="amount" value="<?php echo $amount; ?>" placeholder="Enter Amount" required>
		</div>
		<div class="form-group">
			<label>Quantity: </label>
				<input type="text" name="quantityItem" value="<?php echo $quantityItem; ?>" placeholder="Enter Quantity" required>
		</div>
		<div class="form-group">
			<label>Unit: </label>
				<input type="text" name="unit" value="<?php echo $unit; ?>" placeholder="Enter Unit" required>
		</div>
			<button type="submit" class="btn btn-outline-primary" name="saveToolsItems">Save</button>
			<a class="btn btn-outline-primary" href="VtoolsItem.php">View</a>
	</form>
</center>
</body>
</html>

