<html>
<head>
</head>
<body>
<form method="POST";
<h4><b>Enter the 1st number:-</b></h4>
<input type="text" name="x" id="x" placeholder="1st number">
<br>
<h4><b>Enter the 2nd number:-</b></h4>
<input type="text" name="y" id="y" placeholder="2nd number">
<h4><b>Enter the operator:-</b></h4>
<input type="text" name="z" id="z" placeholder="operator">
<br/><br/>
<input type="submit" name="submit">
</form>
<h4><b>Result:</b></h4>
<br>
</body>
</html>
<?php
$x=$_POST['x'];
$y=$_POST['y'];
$z=$_POST['z'];
switch ($z) {
	case '+':
		$z=$x+$y;
		echo "Addition of two number is:-$z";
		break;
	case '-':
		$z=$x-$y;
		echo "subtraction of two number is:-$z";
		break;
	case '*':
		$z=$x*$y;
		echo "Multiplication of two number is:-$z";
		break;
	case '/':
		$z=$x/$y;
		echo "Division of two number is:-$z";
		break;
	case '%':
		$z=$x%$y;
		echo "Modulus of two number is:-$z";
		break;
	case '**':
		$z=$x**$y;
		echo "Exponential of two number is:-$z";
		break;
	default:
		echo "invalid operator";
		break;
}
