<?php
//Access public variable outisde class scope
class MyClass
{
public $font_size=10;
}

$f = new MyClass;
echo $f->font_size;
?>
