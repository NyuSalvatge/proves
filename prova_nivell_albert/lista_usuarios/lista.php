<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../prova/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../prova/css/style.css">
	
	<title>Document</title>
	<script></script>

</head>
<body>
	<main>
		<!-- Cabecera -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="contForm">
					<div class=row>
						<div class="col-md-12" id="logo"><img src="../prova/img/logo.png" alt="logo"/></div>
					</div>
					<div class="row">
						<div class="col-md-12">
					<?php 
					$conn = new mysqli("localhost", "root", "", "datos");

					if ($conn->connect_error) {
						die("Connection failed:".$conn->connect_error);
					}

					$query="select * from usuarios";

					$result = mysqli_query($conn,$query) or die('Consulta fallida: ' . mysqli_error());

					if ($row = mysqli_fetch_array($result)){ 
						echo "<table id='tablaR' border = '1'> \n"; 
						echo "<tr><td>Nombre</td><td>Apellido</td><td>E-Mail</td><td>DNI</td><td>Móvil</td></tr> \n"; 
						do { 
							echo "<tr><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["email"]."</td><td>".$row["dni"]."</td><td>".$row["movil"]."</td></tr> \n"; 
						} while ($row = mysqli_fetch_array($result)); 
						echo "</table> \n"; 
					} else { 
						echo "¡ No se ha encontrado ningún registro !"; 
					} 

					$conn->close();
					?>
					</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</main>

	<footer><div id="resp"></div></footer>


	<script src="../prova/js/jquery.js"></script>
	<script src="../prova/js/bootstrap.min.js"></script>
</body>
</html>



