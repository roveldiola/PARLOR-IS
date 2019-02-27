<?php
include ('connector.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>

</head>
<body>
<h1>Job</h1>
<?php $result = mysqli_query($db, "SELECT * FROM job"); ?>

	<table>
		<thead>
			<tr>
				<th>Job Number</th>
				<th>Employee Job</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($result)){ ?>
			<tr>
				<td><?php echo $row['job_number']; ?></td>
				<td><?php echo $row['employee_job']; ?></td>
				<td>
				    <button type="submit"> <a href="Ejob.php?id=<?php echo $row['job_number']; ?>">Edit</a></button>
					<button type="button"> <a href="Djob.php?id=<?php echo $row['job_number']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><br>
		<div>
			<button type="submit"> <a href="Cjob.php">Add Job</a></button><br><br>
		</div>
		<h4>Employee</h4>
		<div>
			<button type="submit"> <a href="Cemployee.php">Create Employee</a></button>
			<button type="submit"> <a href="Vemployee.php">View Employee</a></button>
		</div>
		<h4>Salary</h4>
		<div>
			<button type="submit"> <a href="Csalary.php">Create Salary</a></button>
			<button type="submit"> <a href="Vsalary.php">View Salary</a></button>
		</div>

</body>
</html>