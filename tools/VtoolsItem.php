<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>

</head>
<body>
<?php include('toolsItem.php'); ?>
<h1>Tools Item</h1>
<?php $result = mysqli_query($db, "SELECT * FROM tools_item"); ?>
	<table>
		<tbody>
			<tr>
				<th>ID No. </th>
				<th>Time Stamp </th>
				<th>Description </th>
				<th>Amount </th>
				<th>Quantity </th>
				<th>Unit </th>
				<th>Action</th>
			</tr>
			<?php while ($row = mysqli_fetch_array($result)){ ?>
			<tr>
				<td><?php echo $row['id_item']; ?></td>
				<td><?php echo $row['time_stamp']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td><?php echo $row['quantityItem']; ?></td>
				<td><?php echo $row['unit']; ?></td>
				<td>
				    <button type="submit"> <a href="EtoolsItem.php?id=<?php echo $row['id_item']; ?>">Edit</a></button>
					<button type="submit"> <a href="DtoolsItem.php?id=<?php echo $row['id_item']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><br>
	<div>
		<button type="submit"><a href="CtoolsItem.php">Add</a></button>
		<button type="submit"><a href="../index.php">Home</a></button>
	</div>
</body>
</html>