<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	class add{
    private $a = 45;
    private $b = 55;

    public function sum() 
    {
        return $this->a + $this->b;
    }
	}
	$obj = new add();
    $c = $obj->sum();
    echo $c;
	?>


</body>
</html>