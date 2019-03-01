<?php 
include('connector.php');
	
	$query = "SELECT * FROM employee, salary WHERE employee.employee_number = salary.employee_number";
	$result	= mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<h1>Salary</h1>
	<div>
		<table>
			<tbody>
				<tr>
					<th>Salary ID </th>
					<th>Employee Name </th>
					<th>Salary </th>
					<th>Time Stamp </th>
					<th>Action</td>
				</tr>
			<?php 
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_array($result)){
			?>
				<tr>
					<td><?php echo $row['salary_id']; ?></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['salary_emp']; ?></td>
					<td><?php echo $row['time_stamp']; ?></td>
					<td>
			    		<button type="submit"> <a href="Esalary.php?id=<?php echo $row['salary_id']; ?>">Edit</a></button>
						<button type="submit"> <a href="Dsalary.php?id=<?php echo $row['salary_id']; ?>">Delete</a></button>
					</td>
			</tbody>
			<?php 
					}
				}
			?>
		</table>
	</div>
	<br><br>
		<div>
			<button type="submit"> <a href="Csalary.php">Add Salary</a></button><br><br>
		</div>
		<h4>Job</h4>
		<div>
			<button type="submit"> <a href="Cjob.php">Create Job</a></button>
			<button type="submit"> <a href="Vjob.php">View Job</a></button>
		</div>
		<h4>Employee</h4>
		<div>
			<button type="submit"> <a href="Cemployee.php">Create Employee</a></button>
			<button type="submit"> <a href="Vemployee.php">View Employee</a></button>
		</div>

</body>
</html>