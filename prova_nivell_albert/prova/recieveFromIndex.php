<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$movil = $_POST['movil'];

$conn = new mysqli("localhost", "root", "", "datos");

if ($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
} 

$query=mysqli_query($conn,"select email from usuarios where email='$email'");

if($reg=mysqli_fetch_row($query)){
	echo '<script language="javascript">alert("El mail ya esta registrado, ingresa otro");</script>';
}else{
	mysqli_query($conn,"INSERT INTO usuarios (nombre,apellido,email,dni,movil)
		VALUES ('$nombre','$apellido','$email','$dni','$movil')");
	
	echo '<script language="javascript">alert("Usuario creado correctamente");</script>'; 	
}


$conn->close();

?>