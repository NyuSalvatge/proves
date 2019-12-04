<?php include("header.php"); ?>
<div class="container">	
		      		
		<h1>Llista receptes</h1>

		<?php 

		if(isset($_GET["id"])){

			$id=$_GET["id"];
			$borrar = "DELETE FROM plats WHERE id=$id";
			if ($conexion->query($borrar) === TRUE) {   
			} else {
				echo "Error al esborrar: " . $conexion->error;
			}

		}
		$sql = "SELECT * FROM plats";
		$consulta = $conexion->query($sql);


		if ($consulta->num_rows > 0) {
    // output data of each row
			while($row = $consulta->fetch_assoc()) {

				$id=$row["id"];

				echo "<a href='receptes.php?id=$id'><img src='".$row['imatge']."' alt='receta' class='img-thumbnail imatgesLlista'></a><a class='receptes' href='receptes.php?id=$id'>".$row['nom']."</a><a href='llista_receptes.php?id=$id'><img class='eliminarLlista' src='img/remove-icon.png' alt='eliminar'></a><br/>"; 

			}
		} else {
			echo "Encara no has creat cap recepte";
		}

		$conexion->close();
		?>

		<a href="receptes.php"><button>+ Nova recepte</button></a>
		
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>