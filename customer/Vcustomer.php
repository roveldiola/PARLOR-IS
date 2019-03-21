<?php include ('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('customer.php'); ?>
<h1>Customer</h1>
	<?php $result = mysqli_query($db, "SELECT * FROM customer"); ?>
	<div>
		<table>
			<thead>
				<tr>
					<th>Customer ID: </th>
					<th>First Name: </th>
					<th>Middle Initial: </th>
					<th>Last Name: </th>
					<th>Contact Number: </th>
					<th>Purok: </th>
					<th>Barangay: </th>
					<th>City: </th>
					<th>Zip Code: </th>
					<th>Action </th>
				</tr>
			</thead>
			<?php while ($row = mysqli_fetch_array($result)) { ?>
			<tbody>
				<tr>
					<td><?php echo $row['customer_id']; ?></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['middle_initial']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['contact_number']; ?></td>
					<td><?php echo $row['purok']; ?></td>
					<td><?php echo $row['barangay']; ?></td>
					<td><?php echo $row['city']; ?></td>
					<td><?php echo $row['zip_code']; ?></td>
					<td>
						<button type="button"><a href="Ecustomer.php?id=<?php echo $row['customer_id']; ?>">Edit</a></button>
						<button type="button"><a href="Dcustomer.php?id=<?php echo $row['customer_id']; ?>">Delete</a></button>
					</td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>
	<br><br>
	<div>
		<button type="button"> <a href="Ccustomer.php">Add</a></button>
		<button type="submit"> <a href="../index.php">Home</a></button>
	</div>
</body>
</html>