<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$str = "Different forms!";
    $pattern = "/forms/i";
    echo preg_replace($pattern, "aspects", $str);
	?>

</body>
</html>