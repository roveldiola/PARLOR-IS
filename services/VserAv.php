<?php include('../connector/connector.php'); 

	$sql = "SELECT * FROM services_items WHERE receipt_no = receipt_no";
	$result = mysqli_query($db, $sql);
	/*$query = "SELECT * FROM customer, services_availed WHERE customer.customer_id = services_availed.customer_id";
	$result	= mysqli_query($db, $query);*/
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
						
							<a class="nav-link navbar-brand mb-0 h1 active" href="../services/CserAv.php">Services Transaction</a>
						
							<a class="nav-link" href="../unit/Cunit.php">Unit</a>
						
				
					</ul>
				</div>
			</nav>
		</div>
	</header><br>
<h1>Services Transaction</h1>
<br>
	<h2>Services Items</h2>
	<table>
		<thead>
			<tr>
				<th>Receipt No.</th>
				<th>Services Code</th>
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
				<td>
				    <button type="submit"><a href="EserAv.php?id=<?php echo $row['receipt_no']; ?>">Edit</a></button>
					<button type="submit"><a href="DserAv.php?id=<?php echo $row['receipt_no']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php 
				} 
			}
			?>
		</tbody>
	</table>
		<br><br>
		<div>
			<button type="submit"> <a href="CserAv.php">Add</a></button>
			<button type="submit"> <a href="../index.php">Home</a></button>
		</div>
</body>
</html>