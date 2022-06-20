<head>
<title></title>
</head>
<body>
<form method="POST";
<h4><b>Enter the year:</b></h4>
<input type="number" name="year" id="year" placeholder="year">
<br/><br/>
<input type="submit" name="submit">
</form>
<h4><b>Result:</b></h4>
<br>
</body>
</html>
<?php
$year =$_POST['year'];
if(($year % 400 == 0) || (($year % 100 !=0) && ($year % 4 == 0)))
{
    echo "$year is a leap year";
}
else{
    echo "$year is not a leap year";
}
?>