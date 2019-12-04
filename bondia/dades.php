<?php 
echo "Bon dia";
$conn = new mysqli('localhost', 'root', '');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "Conectat correctament";
}

$sql = "CREATE DATABASE miau";
//$conne=mysqli_connect('localhost','root','','prova');

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

 ?>

