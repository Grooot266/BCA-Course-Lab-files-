<?php
$fp = fopen('data.txt','w');
fwrite($fp,'hello');
fclose($fp);
echo "File has been overwritten successfully";
?>