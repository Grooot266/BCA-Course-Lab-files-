<?php
$Array=array("summer","winter","rainy");
print_r($Array);
foreach($Array as $k=> $val)
{
	if ($val == winter) {
		unset($Array[$k]);
	}
}
print_r($Array);
?>