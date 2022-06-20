<?php
session_start();
if (isset($_session['page_count'])) {
	$_session['page_count'] +=1;
}
else
{
	$_session['page_count'] =1;
}
echo "You are visitor number ".$_session['page_count'];
?>
