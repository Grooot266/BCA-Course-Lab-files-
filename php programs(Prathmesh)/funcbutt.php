<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center;">
	<?php
	if (array_key_exists('button1',$_POST)) {
		button1();
	}
	elseif (array_key_exists('button2',$_POST)) {
		button2();
	}
	function button1(){
		echo "This is a button1";
	}
	function button2(){
		echo "This is a button2";
	}
	?>
	<form method="POST">
		<input type="submit" name="button1" class="button" value="Button1"/>
		<input type="submit" name="button2" class="button" value="Button2"/>
	</form>
</body>
</html>