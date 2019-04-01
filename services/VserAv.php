<?php include('../connector/connector.php'); 

	$sql = "SELECT * FROM services, services_items WHERE services.services_code = services_items.services_code";
	$result = mysqli_query($db, $sql);

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
						
							<a class="nav-link" href="../employee/Vemployee.php">Employee</a>
						
							<a class="nav-link" href="../salary/Vsalary.php">Salary</a>
						
							<a class="nav-link" href="../customer/Vcustomer.php">Customer</a>
						
							<a class="nav-link" href="../tools/VtoolsItem.php">Tools Item</a>
						
							<a class="nav-link" href="../tools/VtoolsEmp.php">Tools Employee</a>
						
							<a class="nav-link" href="../services/Vser.php">Services</a>
						
							<a class="nav-link navbar-brand mb-0 h1 active" href="../services/VserAv.php">Services Transaction</a>
												
					</ul>
				</div>
			</nav>
		</div>
	</header><br>
<center>
<h1>Services Transaction</h1>
<br>
	<h2>Services Items</h2>
	<div class="container">
		<a href="CserAv.php"><span style="float: right; font-size: 50px; margin-right: 20px;"><i class="fa fa-plus-circle" font-size="50px"></i></span></a>
			<table class="table table-bordered">
				<thead class="thead-light">
			<tr>
				<th>Receipt No.</th>
				<th>Services Code</th>
				<th>Amount</th>
				<th>Action</th>
			</tr>
		</thead>
			<?php 
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_array($result)){
			?>
		<tbody>
			<tr>
				<td><?php echo $row['receipt_no']; ?></td>
				<td><?php echo $row['services_code']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td>
				    <a class="btn btn-outline-primary btn-sm" href="EserAv.php?id=<?php echo $row['receipt_no']; ?>">Edit</a>
					<a class="btn btn-outline-danger btn-sm" href="DserAv.php?id=<?php echo $row['receipt_no']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
				} 
			}
			?>
		</tbody>
	</table>
</center>
</body>
</html>