<?php include('../connector/connector.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
<?php include('job.php'); ?>
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
		<?php while ($row = mysqli_fetch_array($result)){ ?>
		<tbody>
			<tr>
				<td><?php echo $row['job_number']; ?></td>
				<td><?php echo $row['employee_job']; ?></td>
				<td>
				    <button type="submit"> <a href="Ejob.php?id=<?php echo $row['job_number']; ?>">Edit</a></button>
					<button type="submit"> <a href="Djob.php?id=<?php echo $row['job_number']; ?>">Delete</a></button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>

		<br><br>
		<div>
			<button type="submit"> <a href="Cjob.php">Add</a></button>
			<button type="submit"> <a href="../index.php">Home</a></button>
		</div>
</body>
</html>