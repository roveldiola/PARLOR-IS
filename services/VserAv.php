<?php include('../connector/connector.php'); 

	$sql = "SELECT * FROM services_items WHERE receipt_no = receipt_no";
	$result = mysqli_query($db, $sql);
	/*$query = "SELECT * FROM customer, services_availed WHERE customer.customer_id = services_availed.customer_id";
	$result	= mysqli_query($db, $query);*/
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
	<table>
		<thead>
			<tr>
				<th>Receipt No.</th>
				<th>Services Code</th>
				<th>Action</th>
			</tr>
		</thead>
			<?php 
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_array($result)){
			?>
		<tbody>
			<tr>
				<td><?php echo $row['receipt_no']; ?></td>
				<td><?php echo $row['services_code']; ?></td>
				<td>
				    <button type="submit"><a href="EserAv.php?id=<?php echo $row['receipt_no']; ?>">Edit</a></button>
					<button type="submit"><a href="DserAv.php?id=<?php echo $row['receipt_no']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php 
				} 
			}
			?>
		</tbody>
	</table>
		<br><br>
		<div>
			<button type="submit"> <a href="CserAv.php">Add</a></button>
			<button type="submit"> <a href="../index.php">Home</a></button>
		</div>
</body>
</html>