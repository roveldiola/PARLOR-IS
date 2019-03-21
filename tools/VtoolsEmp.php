<?php include('../connector/connector.php');
	
	$query = "SELECT * FROM employee, tools_emp, tools_item WHERE employee.employee_number = tools_emp.employee_number AND tools_item.id_item = tools_emp.id_item";
	$result	= mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('toolsEmp.php'); ?>
<h1>Tools Employee</h1>
	<table>
		<thead>
			<tr>
				<th>ID </th>
				<th>Employee Name </th>
				<th>Description </th>
				<th>Quantity </th>
				<th>Time Stamp </th>
				<th>Action</th>
			</tr>
		</thead>
			<?php while ($row = mysqli_fetch_array($result)){ ?>
		<tbody>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['quantity']; ?></td>
				<td><?php echo $row['time_stamp']; ?></td>
				<td>
				    <button type="submit"> <a href="EtoolsEmp.php?edit=<?php echo $row['id']; ?>">Edit</a></button>
					<button type="submit"> <a href="DtoolsEmp.php?del=<?php echo $row['id']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<br><br>
	<div>
		<button type="submit"> <a href="CtoolsEmp.php">Add</a></button>
		<button type="submit"> <a href="../index.php">Home</a></button>
	</div>
</body>
</html>