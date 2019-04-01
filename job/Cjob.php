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
<?php include('job.php'); ?>
<center>
	<h1>Job</h1>
		<form class="container" id="needs-validation" action="Vjob.php" method="post" novalidate>
			<div class="form-group">
				<input type="number" name="job_number" value="<?php echo $job_number; ?>" hidden>
				<label>Employee Job: </label>
				<input type="text" name="employee_job" placeholder="Enter Job" value="<?php echo $employee_job; ?>" required>
			</div>
				<button type="submit" class="btn btn-outline-primary" name="saveJob">Save</button>
				<a class="btn btn-outline-primary" href="Vjob.php">View</a>
		</form>
</center>
	<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';

	  window.addEventListener('load', function() {
	    var form = document.getElementById('needs-validation');
	    form.addEventListener('saveJob', function(event) {
	      if (form.checkValidity() === false) {
	        event.preventDefault();
	        event.stopPropagation();
	      }
	      form.classList.add('was-validated');
	    }, false);
	  }, false);
	})();
	</script>
</body>
</html>

