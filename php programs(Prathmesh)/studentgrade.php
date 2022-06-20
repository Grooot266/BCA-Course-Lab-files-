<html>
<head>
</head>
<body>
<form method="POST";
<h4><b>Enter the student marks:-</b></h4>
<input type="number" name="marks" id="marks" placeholder="marks">
<br>
<br/>
<input type="submit" name="submit">
</form>
<h4><b>Result:</b></h4>
<br>
</body>
</html>
<?php
$grade=$_POST['marks'];
if ($grade>80 && $grade<=100) {
	echo "Grade A+";
}
elseif ($grade>60 && $grade<=80) {
	echo "Grade B+";
}
elseif ($grade>50 && $grade<=60) {
	echo "Grade C";
}
elseif ($grade>35 && $grade<=50) {
	echo "Grade D";
}
else{
	echo "Grade F";
}