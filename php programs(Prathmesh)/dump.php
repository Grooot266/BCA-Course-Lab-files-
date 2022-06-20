<!Doctype html>
<html lang="en">
<head>
<tilte>PHP foreach loop<tilte>
</head>
<body>
<?php
$superhero = array(
"name" => "Peter Parker",
"email" => "peterparker@mail.com",
"age" => 18
);
foreach($superhero as $key => $value)
{
echo $key . " : " .$value ."<br>";
}
print_r($superhero);
echo "<br>";
var_dump($superhero);
?>
</body>
</html>
