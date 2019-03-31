<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM services WHERE services_code = '$id'";
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
<?php include('services.php'); ?>
<center>
<h1>Servics</h1>
	<form class="container" action="Vser.php" method="post">
		<div class="form-group">
			<label>Servics Code: </label>
				<input type="number" name="services_code" value="<?php echo $row['services_code']; ?>" readonly>
		</div>
		<div class="form-group">
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $row['description']; ?>" required>
		</div>
		<div class="form-group">
			<label>Amount: </label>
				<input type="text" name="amount" value="<?php echo $row['amount']; ?>" required>
			<?php 
					}
				}
			?>
		</div>
		<button type="submit" class="btn btn-outline-primary" name="update">Update</button>
		<a class="btn btn-outline-primary" href="Vser.php">Back<a/>
	</form>
</center>
</body>
</html>