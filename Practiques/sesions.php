<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="row justify-content-md-center">
	
	<div class="col-sm-3 text-right" style="padding-right: 0px;padding-left: 0px;">
		<a href="#" class='btn btn-danger btn-lg align-self-end pull-right '>Cancelar</a></div>
	<div class="col-sm-3" style='padding-right: 0px; padding-left: 0px;'><h1 style='text-align:center; background-color:#ccc;'>Prendre Nota</h1></div>
	<div class="col-sm-3" style="padding-right: 0px; padding-left: 0px;">
		<a href="sessions2.php" class='btn btn-success btn-lg'>Enviar</a>
	</div>
</div>


<?php 
session_start();
if(isset($_SESSION["hola"])){
	echo $_SESSION["hola"];
}else{

	$_SESSION["hola"]="Miau";
	echo "No ini";
	//header("Location:sessions2.php");
}



 ?>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>