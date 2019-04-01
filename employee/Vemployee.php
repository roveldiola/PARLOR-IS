<?php include('../connector/connector.php');
	
	$query = "SELECT * FROM employee, job WHERE employee.job_number = job.job_number";
	$result	= mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parlor IS</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<a class="navbar-brand" style="color:white;"><h4>Beauty Parlor</h4></a>
					<ul class="navbar-nav mr-auto">
						
							<a class="nav-link" href="../index.php">Home</a>

							<a class="nav-link" href="../job/Vjob.php">Job</a>
						
							<a class="nav-link navbar-brand mb-0 h1 active" href="../employee/Vemployee.php">Employee</a>
						
							<a class="nav-link" href="../salary/Vsalary.php">Salary</a>
						
							<a class="nav-link" href="../customer/Vcustomer.php">Customer</a>
						
							<a class="nav-link" href="../tools/VtoolsItem.php">Tools Item</a>
						
							<a class="nav-link" href="../tools/VtoolsEmp.php">Tools Employee</a>
						
							<a class="nav-link" href="../services/Vser.php">Services</a>
						
							<a class="nav-link" href="../services/VserAv.php">Services Transaction</a>
				
					</ul>
				</div>
			</nav>
		</div>
	</header><br>
	<?php include('employee.php'); ?>
	<center>
	<h1>Employee</h1>
	<div class="container">
		<a href="Cemployee.php"><span style="float: right; font-size: 50px; margin-right: 20px;"><i class="fa fa-plus-circle" font-size="50px"></i></span></a>
		<table class="table table-bordered">
			<tbody class="thead-light">
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
			    		<a class="btn btn-outline-primary btn-sm" href="Eemployee.php?id=<?php echo $row['employee_number']; ?>">Edit</a>
						<a class="btn btn-outline-danger btn-sm" href="Demployee.php?id=<?php echo $row['employee_number']; ?>">Delete</a>
					</td>
			</tbody>
			<?php 
					}
				}
			?>
		</table>
	</center>
</body>
</html>