<html lang="en">
<head>
<tile> php for loop </tilte>
</head>
<?php
$Array = array("summer","rainy","winter");
print_r($Array);
foreach($Array as $k => $val)
{
if($val == "winter")
{
unset($Array[$k]);
}

}
echo "<br>";
print_r($Array);
?>
</body>
</html>

