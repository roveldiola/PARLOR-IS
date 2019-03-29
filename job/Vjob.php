<?php include('../connector/connector.php'); ?>

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

							<a class="nav-link navbar-brand mb-0 h1 active" href="../job/Vjob.php">Job</a>
						
							<a class="nav-link" href="../employee/Vemployee.php">Employee</a>
						
							<a class="nav-link" href="../salary/Vsalary.php">Salary</a>
						
							<a class="nav-link" href="../customer/Vcustomer.php">Customer</a>
						
							<a class="nav-link" href="../tools/VtoolsItem.php">Tools Item</a>
						
							<a class="nav-link" href="../tools/VtoolsEmp.php">Tools Employee</a>
						
							<a class="nav-link" href="../services/Vser.php">Services</a>
						
							<a class="nav-link" href="../services/CserAv.php">Services Transaction</a>
						
							<a class="nav-link" href="../unit/Cunit.php">Unit</a>
						
				
					</ul>
				</div>
			</nav>
		</div>
	</header><br>
	<?php include('job.php'); ?>
	<?php $result = mysqli_query($db, "SELECT * FROM job"); ?>
<center>
	<h1>Job</h1>
	<div class="container">
		<a href="Cjob.php"><span style="float: right; font-size: 50px; margin-right: 20px;"><i class="fa fa-plus-circle" font-size="50px"></i></span></a>
			<table class="table table-bordered">
				<thead class="thead-light">
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
						    <a class="btn btn-outline-primary btn-sm" href="Ejob.php?id=<?php echo $row['job_number']; ?>">Edit</a>
							<a class="btn btn-outline-danger btn-sm" href="Djob.php?id=<?php echo $row['job_number']; ?>">Delete</a>
						</td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
	</div>	
</center>
</body>
</html>