<?php include ('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM customer WHERE customer_id = '$id'";
	$result	= mysqli_query($db, $sql);
	if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result)){

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
			<label>Customer ID </label>
				<input type="number" name="customer_id" placeholder="Enter Number" value="<?php echo $row['customer_id']; ?>" required readonly><br>
			<label>First Name </label>
				<input type="text" name="first_name" placeholder="Enter Name" value="<?php echo $row['first_name']; ?>" required><br>
			<label>Middle Initial </label>
				<input type="text" name="middle_initial" placeholder="Enter Name" value="<?php echo $row['middle_initial']; ?>" required><br>
			<label>Last Name </label>
				<input type="text" name="last_name" placeholder="Enter Name" value="<?php echo $row['last_name']; ?>" required><br>
			<label>Contact No. </label>
				<input type="number" name="contact_number" placeholder="Enter Number" value="<?php echo $row['contact_number']; ?>" required><br>
			<label>Purok </label>
				<input type="text" name="purok" placeholder="Enter Name" value="<?php echo $row['purok']; ?>" required><br>
			<label>Barangay </label>
				<input type="text" name="barangay" placeholder="Enter Name" value="<?php echo $row['barangay']; ?>" required><br>
			<label>City </label>
				<input type="text" name="city" placeholder="Enter Name" value="<?php echo $row['city']; ?>" required><br>
			<label>Zip Code </label>
				<input type="number" name="zip_code" placeholder="Enter Number" value="<?php echo $row['zip_code']; ?>" required>
		</div>
		<?php 
				}
			}
		?>
		<br>
		<div>
			<button type="submit" name="updateCus">Update</button>
			<button type="submit"><a href="Vcustomer.php">Back<a/></button>
		</div>
	</form>
</body>
</html>

