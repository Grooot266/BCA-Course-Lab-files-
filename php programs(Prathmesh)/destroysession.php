<?php
session_start();

//removing session data
if(isset($_SESSION["lastname1"])){
    unset($_SESSION["lastname1"]);
}
?>
