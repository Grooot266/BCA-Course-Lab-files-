<html>
<head>
</head>
<body>
<form method="post";
<h4><b>Enter the 1st value</b></h4>
<input type="text" name="one" id="one" placeholder="1st digit">
<br>
<h4><b>Enter the 2nd value</b></h4>
<input type="text" name="two" id="two" placeholder="2nd Digit">
<br/><br/>
<input type="submit" name="submit">
</form>
<h4><b>Result:</b></h4>
<br>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$sum=0;
$one=$_POST['one'];
$two=$_POST['two'];
$sum=$one+$two;
echo "sum is".$sum;
exit;
}?>
