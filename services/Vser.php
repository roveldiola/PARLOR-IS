<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('services.php'); ?>
<h1>Services</h1>
<?php $result = mysqli_query($db, "SELECT * FROM services"); ?>
	<table>
		<thead>
			<tr>
				<th>Services Code</th>
				<th>Description</th>
				<th>Amount</th>
				<th>Action</th>
			</tr>
		</thead>
			<?php while ($row = mysqli_fetch_array($result)){ ?>
		<tbody>
			<tr>
				<td><?php echo $row['services_code']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td>
				    <button type="submit"> <a href="Eser.php?id=<?php echo $row['services_code']; ?>">Edit</a></button>
					<button type="submit"> <a href="Dser.php?id=<?php echo $row['services_code']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><br>
	<div>
		<button type="submit"><a href="Cser.php">Add</a></button>
		<button type="submit"><a href="../index.php">Home</a></button>
	</div>
</body>
</html>