<?php 
include('connector.php');
	
	$query = "SELECT * FROM employee, job WHERE employee.job_number = job.job_number";
	$result	= mysqli_query($db, $query);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
	<div>
		<h1>Employee</h1>
		<table>
			<tbody>
				<tr>
					<th>Employee Number </th>
					<th>First Name </th>
					<th>Middle Initial </th>
					<th>Last Name </th>
					<th>Employee Job </th>
					<th>Action</td>
				</tr>
			<?php 
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_array($result)){
			?>
				<tr>
					<td><?php echo $row['employee_number']; ?></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['middle_initial']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['employee_job']; ?></td>
					<td>
			    		<button type="submit"> <a href="Eemployee.php?id=<?php echo $row['employee_number']; ?>">Edit</a></button>
						<button type="submit"> <a href="Demployee.php?id=<?php echo $row['employee_number']; ?>">Delete</a></button>
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
			<button type="submit"> <a href="Cemployee.php">Add Employee</a></button><br><br>
		</div>
		<h4>Job</h4>
		<div>
			<button type="submit"> <a href="Cjob.php">Create Job</a></button>
			<button type="submit"> <a href="Vjob.php">View Job</a></button>
		</div>
		<h4>Salary</h4>
		<div>
			<button type="submit"> <a href="Csalary.php">Create Salary</a></button>
			<button type="submit"> <a href="Vsalary.php">View Salary</a></button>
		</div>

</body>
</html>