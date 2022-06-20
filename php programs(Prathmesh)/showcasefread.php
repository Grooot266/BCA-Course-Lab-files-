<?php
//fread
$myfile = fopen("doc1.txt","r");
echo fread($myfile,"5");
fclose($myfile);
?>

