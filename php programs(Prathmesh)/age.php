<html>
<head>
</head>
<body>
<form method="POST";
<h4><b>Enter your age:-</b></h4>
<input type="text" name="age" id="age" placeholder="Your age">
<br>
<br/>
<input type="submit" name="submit">
</form>
<h4><b>Result:</b></h4>
<br>
</body>
</html>
<?php
$age =$_POST['age'];
if($age >=18){
	echo "$age is eligible for voting";
}
else{
	echo "$age is not eligible for voting";
}
?>