
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
<center>
<h1>CALCULATOR IN PHP</h1>
<div class="container">
<form action="index.php" method="post">

	
	<input type="text" name="value1" placeholder="value1"> 
	<br><br>
		
	<input type="text" name="value2" placeholder="value2">
	<br><br>
	
	<input type="text" name="operator" placeholder="operator">
	<br><br>
<input type="submit" name="submit">

</div>
</form>
<br>
<br>
<?php 
$addition=new Calculator;

echo "the solution is:";

echo $addition->Calc('value1','value2','operator');

 ?>

</center>
</body>
</html>