<h1>For Creating the file:-</h1>
<?php
$fp = fopen('Q3.txt','w');
fwrite($fp,'hello Prathmesh');
fclose($fp);
echo "File has been Created successfully" .$fp;
?>
