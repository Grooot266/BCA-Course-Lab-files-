<?php

$myfile = fopen("diskspace.php","r");
echo fread($myfile,"1");
fclose($myfile);
?>

