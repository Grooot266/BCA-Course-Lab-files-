<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4><b>Enter the 1st value:-</b></h4>
	<input type="text" name="one" id="one" placeholder="1st digit">
	<br>
	<h4><b>Enter 2nd value:-</b></h4>
	<input type="text" name="two" id="two" placeholder="2nd digit">
	<br/><br/>
	<input type="submit" name="submit">
	<form>
		<h4><b>Result:-</b></h4>
		<br>
	</form>

</body>
</html>
<?php
if (array_key_exists('submit',$_POST)) {
	add();
}
function add(){
	if (isset($_POST['submit']) {
		$sum=();
		$one=$_POST['one'];
		$two=$_POST['two'];
		
	}
}