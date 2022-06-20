<?php
$myfile = fopen("data.txt", "r");
echo fgets($myfile);
fclose($myfile);
?>