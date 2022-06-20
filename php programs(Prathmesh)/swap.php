<html>
<body>
<form method="POST">
Enter a number:-
<input type="number" name="number1"><br/><br/>
<input type="number" name="number2"><br/><br/>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$a=$_POST[number1];
$b=$_POST[number2];
$c=$a;
$a=$b;
$b=$c;
echo"After Swapping<br><br>";
echo "a=".$a"b=".$b;
?>
//same program with using function