<?php include ('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM customer WHERE customer_id = '$id'";
	$result	= mysqli_query($db, $sql);
	if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result)){

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
	<form action = "Vcustomer.php" method = "post">
		<div class="form-group">
			<label>Customer ID </label>
				<input type="number" name="customer_id" placeholder="Enter Number" value="<?php echo $row['customer_id']; ?>" readonly>
		</div>
		<div class="form-group">
			<label>First Name </label>
				<input type="text" name="first_name" placeholder="Enter Name" value="<?php echo $row['first_name']; ?>" required>
		</div>
		<div class="form-group">
			<label>Middle Initial </label>
				<input type="text" name="middle_initial" placeholder="Enter Name" value="<?php echo $row['middle_initial']; ?>" required>
		</div>
		<div class="form-group">
			<label>Last Name </label>
				<input type="text" name="last_name" placeholder="Enter Name" value="<?php echo $row['last_name']; ?>" required>
		</div>
		<div class="form-group">
			<label>Contact No. </label>
				<input type="number" name="contact_number" placeholder="Enter Number" value="<?php echo $row['contact_number']; ?>" required>
		</div>
		<div class="form-group">
			<label>Purok </label>
				<input type="text" name="purok" placeholder="Enter Name" value="<?php echo $row['purok']; ?>" required>
		</div>
		<div class="form-group">
			<label>Barangay </label>
				<input type="text" name="barangay" placeholder="Enter Name" value="<?php echo $row['barangay']; ?>" required>
		</div>
		<div class="form-group">
			<label>City </label>
				<input type="text" name="city" placeholder="Enter Name" value="<?php echo $row['city']; ?>" required>
		</div>
		<div class="form-group">
			<label>Zip Code </label>
				<input type="number" name="zip_code" placeholder="Enter Number" value="<?php echo $row['zip_code']; ?>" required>
		</div>
		<?php 
				}
			}
		?>
			<button type="button" class="btn btn-outline-primary" name="updateCus">Update</button>
			<a class="btn btn-outline-primary" href="Vcustomer.php">Back<a/></button>
	</form>
</center>
</body>
</html>

