<?php
$myfile = fopen("data.txt", "r");
	echo fgetc($myfile);
fclose($myfile);
?>