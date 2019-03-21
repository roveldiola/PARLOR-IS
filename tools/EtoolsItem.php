<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM tools_item WHERE id_item = '$id'";
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
<?php include('toolsItem.php'); ?>
<h1>Tools Item</h1>
	<form action="VtoolsItem.php" method="post">
		<div>
			<label>ID No.: </label>
				<input type="number" name="id_item" value="<?php echo $row['id_item']; ?>" required readonly><br>
				<input type="hidden" name="time_stamp" value="<?php echo $row['time_stamp']; ?>" required>
			<label>Description: </label>
				<input type="text" name="description" value="<?php echo $row['description']; ?>" required><br>
			<label>Amount: </label>
				<input type="number" name="amount" value="<?php echo $row['amount']; ?>" required><br>
			<label>Quantity: </label>
				<input type="number" name="quantityItem" value="<?php echo $row['quantityItem']; ?>" required><br>
			<label>Unit: </label>
				<input type="number" name="unit" value="<?php echo $row['unit']; ?>" required>
			<?php 
					}
				}
			?>
		</div><br>
		<div>
			<button type="submit" name="updateToolsItem">Update</button>
			<button type="submit"><a href="VtoolsItem.php">Back<a/></button>
		</div>
	</form>
</body>
</html>