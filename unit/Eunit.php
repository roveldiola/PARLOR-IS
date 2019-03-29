<?php include('../connector/connector.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM unit WHERE unit = '$id'";
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
<?php include('unit.php'); ?>
<h1>Unit</h1>
	<form action="Vunit.php" method="post">
		<div>
			<label>Unit: </label>
			<input type="text" name="unit" value="<?php echo $row['unit']; ?>" required>
		</div><br>
		<?php 
				}
			}
		?>
		<div>
			<button type="submit" name="updateUnit">Update</button>
			<button type="submit"><a href="Vunit.php">Back<a/></button>
		</div>
	</form>
</body>
</html>