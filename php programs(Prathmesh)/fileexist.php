<?php
//file_exists() function
clearstatcache();
$file_pointer = 'C:\xampp\htdocs\php programs\include.php';
if(file_exists($file_pointer))
{
echo "The file $file_pointer pointer exists";
}
else
{
echo "The file $file_pointer does not exists";
}

?>
