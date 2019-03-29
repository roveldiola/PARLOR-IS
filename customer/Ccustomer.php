<?php include('../connector/connector.php');

	$sql = "SELECT * FROM customer";
	$result = mysqli_query($db, $sql);
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
<?php include('customer.php'); ?>
<center>
<h1>Customer</h1>
	<form class="container" action = "Vcustomer.php" method = "post">
		<div class="form-group">
			<label>Customer ID: </label>
				<input type="number" name="customer_id" placeholder="Enter Number" value="<?php echo $customer_id; ?>" required>
		</div>
		<div class="form-group">
			<label>First Name: </label>
				<input type="text" name="first_name" placeholder="Enter Name" value="<?php echo $first_name; ?>" required>
		</div>
		<div class="form-group">
			<label>Middle Initial: </label>
				<input type="text" name="middle_initial" placeholder="Enter Name" value="<?php echo $middle_initial; ?>" required>
		</div>
		<div class="form-group">
			<label>Last Name: </label>
				<input type="text" name="last_name" placeholder="Enter Name" value="<?php echo $last_name; ?>" required>
		</div>
		<div class="form-group">
			<label>Contact No.: </label>
				<input type="number" name="contact_number" placeholder="Enter Number" value="<?php echo $contact_number; ?>" required>
		</div>
		<div class="form-group">
			<label>Purok: </label>
				<input type="text" name="purok" placeholder="Enter Name" value="<?php echo $purok; ?>" required>
		</div>
		<div class="form-group">
			<label>Barangay: </label>
				<input type="text" name="barangay" placeholder="Enter Name" value="<?php echo $barangay; ?>" required>
		</div>
		<div class="form-group">
			<label>City: </label>
				<input type="text" name="city" placeholder="Enter Name" value="<?php echo $city; ?>" required>
		</div>
		<div class="form-group">
			<label>Zip Code: </label>
				<input type="number" name="zip_code" placeholder="Enter Number" value="<?php echo $zip_code; ?>" required>
		</div>
		<button type="button" class="btn btn-outline-primary" name="saveCus">Save</button>
		<a class="btn btn-outline-primary" href="Vcustomer.php">View</a></button>
	</form>
</center>
</body>
</html>

