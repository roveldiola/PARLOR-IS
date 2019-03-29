<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('unit.php'); ?>
<h1>Unit</h1>
<?php $result = mysqli_query($db, "SELECT * FROM unit_table"); ?>
	<table>
		<thead>
			<tr>
				<th>Unit</th>
				<th>Action</th>
			</tr>
		</thead>
			<?php while ($row = mysqli_fetch_array($result)){ ?>
		<tbody>
			<tr>
				<td><?php echo $row['unit']; ?></td>
				<td>
				    <button type="submit"><a href="Eunit.php?id=<?php echo $row['unit']; ?>">Edit</a></button>
					<button type="submit"><a href="Dunit.php?id=<?php echo $row['unit']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><br>
	<div>
		<button type="submit"><a href="Cunit.php">Add</a></button>
		<button type="submit"><a href="../index.php">Home</a></button>
	</div>
</body>
</html>