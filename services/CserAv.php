<?php include('../connector/connector.php'); 

	$sql = "SELECT * FROM services_availed";
	$result = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('serAv.php'); ?>
<h1>Services Transaction</h1>
<br>
	<h2>Services Availed</h2>
		<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
			<div>
				<label>Receipt Number: </label>
					<select name="receipt_no">
					<option> </option>
					<?php
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_array($result)){
					?>
					<option value="<?php echo $row['receipt_no']; ?>"><?php echo $row['customer_id']; ?></option>
					<?php
							}
						}
					?>
					</select><br>
					<input type="hidden" name="date" value="<?php echo $date; ?>">
			</div>

		<br>
		<h2>Services</h2>
		<table>
			<thead>
				<tr>
					<th>Description</th>
				</tr>
			</thead>
			<?php $result1 = mysqli_query($db, "SELECT * FROM services"); ?>
			<?php while ($row1 = mysqli_fetch_array($result1)){ ?>

			<tbody>
				<td>
					<input type="checkbox" name="ID" value="<?php echo $services_code; ?>" ><?php echo $row1['description']; ?>
				</td>
			</tbody>
			<?php } ?>
		</table>

		<br><br>
		<div>
			<button type="submit" name="saveAv">Save</button>
			<button type="submit"><a href="VserAv.php">View</a></button>
		</div>
	</form>
</body>
</html>

