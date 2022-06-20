<html>
<head>
</head>
<form method="post">
<h4><b>Enter 1st value</b></h4>
<input type="text" name="one" id="a" placeholder="1st Digit">
<br>
<h4><b>Enter 2nd Value </b></h4>
<input type="text" name="two" id="b" placeholder="2nd Digit">
<br>
<br>
<input type="submit" name="submit">
</form>
<?php
$a=$_POST['one'];
$b=$_POST['two'];
$third=$a;
$a=$b;
$b=$third;
echo "After swapping <br>";
echo "a=".$a."b=".$b;
?>
