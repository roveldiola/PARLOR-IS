<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('toolsItem.php'); ?>
<h1>Tools Item</h1>
	<form action = "VtoolsItem.php" method = "post">
		<div>
			<label>ID No.: </label>
				<input type="number" name="id_item" value="<?php echo $id_item; ?>" placeholder="Enter ID" required><br>
				<input type="hidden" name="time_stamp" value="<?php echo $time_stamp; ?>">
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $description; ?>" placeholder="Enter Description" required><br>
			<label>Amount: </label>
				<input type="number" name="amount" value="<?php echo $amount; ?>" placeholder="Enter Amount" required><br>
			<label>Quantity: </label>
				<input type="number" name="quantityItem" value="<?php echo $quantityItem; ?>" placeholder="Enter Quantity" required><br>
			<label>Unit: </label>
				<input type="number" name="unit" value="<?php echo $unit; ?>" placeholder="Enter Unit" required><br>

		</div><br>
		<div>
			<button type="submit" name="saveToolsItems">Save</button>
			<button type="submit"> <a href="VtoolsItem.php">View</a></button>
		</div>
	</form>
</body>
</html>

