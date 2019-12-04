<?php 

function iniciarConexio($server,$user,$pass,$bd){

//Crea la conexió
	$conn = new mysqli($server, $user, $pass,$bd);

// Comprova la conexió
	if ($conn->connect_error) {
		die("Problemes de conexió: " . $conn->connect_error);
	}else  {
		echo "Conectat correctament <br/>";
		return $conn;
	}
}

function comprobarExistent($conn,$taula,$clau){

	$query="SELECT * FROM $taula WHERE nom='".$clau."'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) >0){
	echo "Usuari existent <br/>";	
		return true;
	}else{
		return false;
	}

}

function insertar($conn,$taula,$nom){
	
	$sql = "INSERT INTO ".$taula." (nom) VALUES ('".$nom."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br/>" . $conn->error;
	}

}

function esborrar($conn,$taula,$nom){	
	$sql = "DELETE FROM ".$taula." WHERE nom=('".$nom."')";

	if ($conn->query($sql) === TRUE) {
		echo "Esborrat";
	} else {
		echo "Error: " . $sql . "<br/>" . $conn->error;
	}

}




?>