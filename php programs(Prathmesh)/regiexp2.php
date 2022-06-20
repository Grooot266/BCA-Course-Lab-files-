<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$str = "The rain in Spain falls mainly on the plains.";
    $pattern = "~ain~i";
    echo preg_match_all($pattern, $str);
	?>

</body>
</html>