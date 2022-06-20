<?php
$fp = fopen('data.txt','w');
fwrite($fp,'hello Prathmesh');
fwrite($fp, 'Welcome to the php write file');
fclose($fp);
echo "File has been written successfully";
?>