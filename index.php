<?php
include 'calculator.php';
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Calculator In PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head> 
<body class="body">
	<div class="jumbotron text-center">
		<h1 class="display-6">Simple OOP-PHP Calculator</h1>
	</div>
	<div class="container">
		<hr class="my-4">
		<div class="row">
			<div class="col-md-6">
				<div class="card" style="width: 400px;">
					<div class="card-body">
						<form action="index.php" method="post">
							<div class="input-group mb-3">
								<input class="form-control" type="text" name="value1" placeholder="Enter First Value">
							</div>
							<div class="input-group mb-3">
								<input class="form-control" type="text" name="value2" placeholder="Enter Second Value">
							</div>
							<div class="input-group mb-3">
								<input class="form-control" type="text" name="operator" placeholder="Enter the Operator">
							</div>
							<div class="input-group mb-3">
								<button class="btn btn-secondary" type="submit" name="submit">Calculate</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php
				$addition = new Calculator('value1', 'value2', 'operator', 'result');
				?>
				<div class="alert alert-dark" role="alert" style="width: 200px;">
					The solution is:
					 <?php
						echo $addition->Calc('value1', 'value2', 'operator');
					
					?>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<hr class="my-4">
	</div>
</body>

</html>
