<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$str = "graphical presentation of research data and software tools";
$pattern = "/Research data/i";
echo preg_match($pattern, $str);
?>
</body>
</html>