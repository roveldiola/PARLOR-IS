<?php include('../connector/connector.php');
	
	$query = "SELECT * FROM employee, salary WHERE employee.employee_number = salary.employee_number";
	$result	= mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('salary.php'); ?>
<h1>Salary</h1>
		<table>
			<thead>
				<tr>
					<th>Salary ID </th>
					<th>Employee Name </th>
					<th>Salary </th>
					<th>Time Stamp </th>
					<th>Action</td>
				</tr>
			</thead>
			<?php 
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_array($result)){
			?>
			<tbody>
				<tr>
					<td><?php echo $row['salary_id']; ?></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['salary_emp']; ?></td>
					<td><?php echo $row['time_stamp']; ?></td>
					<td>
			    		<button type="submit"><a href="Esalary.php?id=<?php echo $row['salary_id']; ?>">Edit</a></button>
						<button type="submit"><a href="Dsalary.php?id=<?php echo $row['salary_id']; ?>">Delete</a></button>
					</td>
				</tr>
			</tbody>
			<?php 
					}
				}
			?>
		</table>
		<br><br>
		<div>
			<button type="submit"> <a href="Csalary.php">Add</a></button>
			<button type="submit"> <a href="../index.php">Home</a></button>
		</div>
</body>
</html>