<?php

$number=123;
$orignal_num=$number;
$rs=0;
while($number>0)
{

$rs = $rs * 10 + $number % 10;
$number = (int)($number / 10);

}

print_r("Result:$orignal_num<br>Revrse of Number is= $rs");
 
?>
