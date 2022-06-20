<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$myfile=fopen("lab.txt", "r") or die("Unable to open the file!!");
	echo fread($myfile,filesize("lab.txt"));
	fclose($myfile);
  ?>

</body>
</html>