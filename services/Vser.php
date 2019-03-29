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

							<a class="nav-link" href="../job/Vjob.php">Job</a>
						
							<a class="nav-link" href="../employee/Vemployee.php">Employee</a>
						
							<a class="nav-link" href="../salary/Vsalary.php">Salary</a>
						
							<a class="nav-link" href="../customer/Vcustomer.php">Customer</a>
						
							<a class="nav-link" href="../tools/VtoolsItem.php">Tools Item</a>
						
							<a class="nav-link" href="../tools/VtoolsEmp.php">Tools Employee</a>
						
							<a class="nav-link  navbar-brand mb-0 h1 active" href="../services/Vser.php">Services</a>
						
							<a class="nav-link" href="../services/CserAv.php">Services Transaction</a>
						
							<a class="nav-link" href="../unit/Cunit.php">Unit</a>
						
				
					</ul>
				</div>
			</nav>
		</div>
	</header><br>
<?php include('services.php'); ?>
<center>
<h1>Services</h1>
<?php $result = mysqli_query($db, "SELECT * FROM services"); ?>
	<table>
		<thead>
			<tr>
				<th>Services Code</th>
				<th>Description</th>
				<th>Amount</th>
				<th>Action</th>
			</tr>
		</thead>
			<?php while ($row = mysqli_fetch_array($result)){ ?>
		<tbody>
			<tr>
				<td><?php echo $row['services_code']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td>
				    <button type="submit"> <a href="Eser.php?id=<?php echo $row['services_code']; ?>">Edit</a></button>
					<button type="submit"> <a href="Dser.php?id=<?php echo $row['services_code']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><br>
	<div>
		<button type="submit"><a href="Cser.php">Add</a></button>
		<button type="submit"><a href="../index.php">Home</a></button>
	</div>
</center>
</body>
</html>