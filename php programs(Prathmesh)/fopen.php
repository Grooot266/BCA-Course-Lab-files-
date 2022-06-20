<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$myfile=fopen("data.txt", "r") or die("Unable to open the file!!");
	echo fread($myfile,filesize("data.txt"));
	fclose($myfile);
  ?>

</body>
</html>