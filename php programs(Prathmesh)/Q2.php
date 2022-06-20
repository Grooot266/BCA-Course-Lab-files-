<?php
$a=26;
$b=78;
$c= $a + $b;
echo "The total of two numbers is:- " .$c;
$number=$c;
$orignal_num=$number;
$rs=0;
while($number>0)
{
$rs = $rs * 10 + $number % 10;
$number = (int)($number / 10);
 
}
echo "     Revrse of Number is= $rs";
 
?>
