<?php
$fp=fopen('data.txt','w');
fwrite($fp,'keep');
fwrite($fp,'smiling');
fclose($fp);
echo "File written successfully";
?>
