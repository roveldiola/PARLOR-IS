<?php include('../connector/connector.php'); 

	$Customer = "SELECT * FROM customer";
	$result1 = mysqli_query($db, $Customer);

	if (isset($_POST['saveAv'])) {
		$receipt_no = mysqli_real_escape_string($db, $_POST['receipt_no']);
		$customer_id = mysqli_real_escape_string($db, $_POST['customer_id']);

		$receit = array();
		$Receipt = '';
		$servicess = $_POST['Services'];

		$Customer="INSERT INTO services_availed (receipt_no, customer_id) VALUES ('$receipt_no', '$customer_id');";
		mysqli_query($db, $Customer);

		for($i = 0; $i < count($_POST['Services']); $i++){
			$receit[] = $receipt_no;
		}
	
		for($num = 0; $num < count($_POST['Services']); $num++){
			$services_1 = mysqli_real_escape_string($db, $servicess[$num]);
			$receipt_1 = mysqli_real_escape_string($db, $receit[$num]);
			$Receipt .= "INSERT INTO services_items (receipt_no, services_code) VALUES ('$receipt_1', $services_1);";
		}

		if($Receipt != ''){
			if(mysqli_multi_query($db, $Receipt) == true){
			echo "<script> alert('Successfully Added!') </script>";
				}
				else{
					echo "<script> alert('Error!') </script>";
				}
		}
	}
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
<center>
<h1>Services Transaction</h1> 
<br>
	<h2>Services Availed</h2>
		<form class="container" action="CserAv.php" method="post">
			<div class="form-group">
				<label>Receipt No.: </label>
					<input type="text" name="receipt_no" value="<?php echo strtoupper(uniqid()) ?>" readonly required/>
			</div>
			<div class="form-group">
				<label>Customer ID: </label>
				<select name="customer_id">
				<option> </option>
				<?php
					if(mysqli_num_rows($result1)){
						while($row1 = mysqli_fetch_array($result1)){
				?>
				<option value="<?php echo $row1['customer_id']; ?>"><?php echo $row1['first_name']; ?></option>
				<?php
						}
					}
				?>
				</select>
			</div>

		<br>
		<h2>Services Items</h2>
		<table>
			<thead>
				<tr>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<?php $result1 = mysqli_query($db, "SELECT * FROM services"); ?>
				<?php while($row1 = mysqli_fetch_array($result1)){ ?>
				<td>
					<input type="checkbox" name="Services[]" value="<?php echo $row1['services_code']; ?>" ></input><?php echo $row1['description']; ?>
				</td>
				<?php }?>
			</tbody>
		</table>

		<br>
		<button type="submit" class="btn btn-outline-primary" name="saveAv">Save</button>
		<a class="btn btn-outline-primary" href="VserAv.php">View</a>
	</form>
</center>
</body>
</html>