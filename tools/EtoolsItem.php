<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM tools_item WHERE id_item = '$id'";
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
<?php include('toolsItem.php'); ?>
<center>
<h1>Tools Item</h1>
	<form class="container" action="VtoolsItem.php" method="post">
		<div class="form-group">
			<label>ID No.: </label>
				<input type="number" name="id_item" value="<?php echo $row['id_item']; ?>" readonly>
				<input type="hidden" name="time_stamp" value="<?php echo $row['time_stamp']; ?>" required>
		</div>
		<div class="form-group">
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $row['description']; ?>" required>
		</div>
		<div class="form-group">
			<label>Amount: </label>
				<input type="number" name="amount" value="<?php echo $row['amount']; ?>" required>
		</div>
		<div class="form-group">
			<label>Quantity: </label>
				<input type="text" name="quantityItem" value="<?php echo $row['quantityItem']; ?>" required>
		</div>
		<div class="form-group">
			<label>Unit: </label>
				<input type="number" name="unit" value="<?php echo $row['unit']; ?>" required>
			<?php 
					}
				}
			?>
		</div>
			<button type="submit" class="btn btn-outline-primary" name="updateToolsItem">Update</button>
			<a class="btn btn-outline-primary" href="VtoolsItem.php">Back<a/></button>
	</form>
</center>
</body>
</html>