<?php include('../connector/connector.php');

	$sql = "SELECT * FROM customer";
	$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('customer.php'); ?>
<h1>Customer</h1>
	<form action = "Vcustomer.php" method = "post">
		<div>
			<label>Customer ID: </label>
				<input type="number" name="customer_id" placeholder="Enter Number" value="<?php echo $customer_id; ?>" required><br>
			<label>First Name: </label>
				<input type="text" name="first_name" placeholder="Enter Name" value="<?php echo $first_name; ?>" required><br>
			<label>Middle Initial: </label>
				<input type="text" name="middle_initial" placeholder="Enter Name" value="<?php echo $middle_initial; ?>" required><br>
			<label>Last Name: </label>
				<input type="text" name="last_name" placeholder="Enter Name" value="<?php echo $last_name; ?>" required><br>
			<label>Contact No.: </label>
				<input type="number" name="contact_number" placeholder="Enter Number" value="<?php echo $contact_number; ?>" required><br>
			<label>Purok: </label>
				<input type="text" name="purok" placeholder="Enter Name" value="<?php echo $purok; ?>" required><br>
			<label>Barangay: </label>
				<input type="text" name="barangay" placeholder="Enter Name" value="<?php echo $barangay; ?>" required><br>
			<label>City: </label>
				<input type="text" name="city" placeholder="Enter Name" value="<?php echo $city; ?>" required><br>
			<label>Zip Code: </label>
				<input type="number" name="zip_code" placeholder="Enter Number" value="<?php echo $zip_code; ?>" required><br>
		</div>
		<br>
		<div>
			<button type="submit" name="saveCus">Save</button>
			<button type="submit"><a href="Vcustomer.php">View</a></button>
		</div>
	</form>
</body>
</html>

