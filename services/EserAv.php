<?php include ('../connector/connector.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM customer";
	$result = mysqli_query($db, $query);
	$sql = "SELECT * FROM services_availed WHERE receipt_no = '$id'";
	$result1 = mysqli_query($db, $sql);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('serAv.php'); ?>
<h1>Employee</h1>
	<div>
		<form action = "VserAv.php" method = "post">
			<?php 
				if(mysqli_num_rows($result1)) {
					while($row1 = mysqli_fetch_array($result1)) {
				?>

			<label>Receipt No.: </label>
			<input type="number" name="receipt_no" value="<?php echo $row1['receipt_no']; ?>" required readonly><br>

			<label>Customer Name: </label>
			<select name="customer_id">
			<?php
			if(mysqli_num_rows($result)){
				while($row = mysqli_fetch_array($result)){
			?>
			
			<option value="<?php echo $row['customer_id']; ?>" <?php if($row['customer_id'] == $row1['customer_id']) echo "selected"; ?> ><?php echo $row['first_name']; ?></option>
			<?php
					}
				}
			?>
			</select>
			<?php
					}
				}
			?>

			<input type="hidden" name="date" value="<?php echo $row1['date']; ?>" required>

			<br><br>
			<button type="submit" name="updateAv">Update</button>
			<button type="submit"> <a href="VserAv.php">Back<a/></button>
		</form>
	</div>
</body>
</html>

