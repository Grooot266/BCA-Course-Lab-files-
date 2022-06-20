<html>
<head>
</head>
<body>
<form method="POST";
<h4><b>Enter the number for it's multiplication table:-</b></h4>
<input type="number" name="x" id="x" placeholder="1st number">
<br>
<h4><b>Enter the range:-</b></h4>
<input type="number" name="y" id="y" placeholder="2nd number">
<br/><br/>
<input type="submit" name="submit">
</form>
<h4><b>Result:</b></h4>
<br>
</body>
</html>
<?php

$x = $_POST['x'];
$r = $_POST['y'];

for ($i = 1; $i <= $r; $i++) {
    echo  $x, " * ", $i, " = ", $x * $i,"\n","\n";
}
    
?>