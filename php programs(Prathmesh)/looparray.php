<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$sub = array("AI", "ML", "Database" );
	$arrlength = count($sub);

	for($x = 0; $x < $arrlength; $x++) {
		echo $sub[$x];
		echo "<br>";
	}
	?>

</body>
</html>