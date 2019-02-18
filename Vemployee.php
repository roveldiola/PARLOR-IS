<?php 
include('connector.php');
	
	$query = "SELECT * FROM employee";
	$result	= mysqli_query($db, $query);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parlor IS</title>
</head>
<body>
	<div>
		<h2>Employee</h2>
		<table>
			<tbody>
				<tr>
					<td>Employee Number</td>
					<td>First Name</td>
					<td>Middle Initial</td>
					<td>Last Name</td>
					<td>Job Number</td>
					<td>Action</td>
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
					<td><?php echo $row['job_number']; ?></td>
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
			<button type="button"> <a href="Cemployee.php">Add</a></button>
			<button type="button"> <a href="Cjob.php">Create Job</a></button>
		</div>

</body>
</html>