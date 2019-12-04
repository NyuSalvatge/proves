<?php 
session_start();
$_SESSION["hola"]="miau";
header("Location:sesions.php");
 ?>