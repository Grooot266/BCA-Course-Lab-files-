<html>
<head>
<tilte>
how to call php function on the click of a button?
</tilte>
</head>
<h4> how to call php function on the click of a button ?
</h4>

<?php
if(array_key_exists('button1',$_POST))
{
button1();
}
else if(array_key_exists('button2',$_POST))
{
button2();
}
function button1()
{
echo "This is button1 that is selected";
}
function button2()
{
echo "This is button2 that is selected";
}
?>
<form method="post">
<input type="submit" name="button1" class="button" value="button1" />

<input type="submit" name="button2" class="button" value="button2" />
</form>
</head>
</html>
