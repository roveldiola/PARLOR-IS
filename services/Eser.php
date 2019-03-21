<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM services WHERE services_code = '$id'";
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
<?php include('services.php'); ?>
<h1>Servics</h1>
	<form action="Vser.php" method="post">
		<div>
			<label>Servics Code: </label>
				<input type="number" name="services_code" value="<?php echo $row['services_code']; ?>" readonly><br>
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $row['description']; ?>" required ><br>
			<label>Amount: </label>
				<input type="text" name="amount" value="<?php echo $row['amount']; ?>" required><br>
			<?php 
					}
				}
			?>
		</div><br>
		<div>
			<button type="submit" name="update">Update</button>
			<button type="submit"><a href="Vser.php">Back<a/></button>
		</div>
	</form>
</body>
</html>