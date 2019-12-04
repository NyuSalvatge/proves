<?php 
include("header.php");

	$id= $_GET['id'];
	$sql = "SELECT * FROM plats WHERE id=$id";
	$consulta = $conexion->query($sql);
	if ($consulta->num_rows > 0) {
    // output data of each row
		while($row = $consulta->fetch_assoc()) {
			$nom=$row['nom'];
			$direccio=$row['imatge'];
			$ingredients=json_decode($row['ingredients'], true);
			$passos=json_decode($row['passos'], true);

			?>
			<div class="container form-editar">
			<form class="row" method="post" <?php echo "action='rebre_info.php?id=$id'"?> name="miForm" enctype="multipart/form-data">
				<label for="nom">Nom:</label>
				<?php echo "<input name='nom' value='$nom'>"?><br/>
				<img src="<?php echo $direccio;?>" width='400px' height='400px'/><br/>

				<?php echo "<label for='imagen'>Imatge:</label>" ?>
				<?php echo "<input type='file' name='image' id='image'/><br/>" ?>

				<div class="ingredients">					
					<label for="ingredients">Ingredients:</label>
					<?php 
					foreach ($ingredients as $ingre) {
											
					echo "<div><input type='text' name='ingredients[]' value='$ingre'/><a href='javascript:void(0);' class='remove_button' title='Remove field'><img class='eliminarLlista' src='img/remove-icon.png' alt='Esborrar'></a></div>";
					 } ?>										
				</div>
				<a href="javascript:void(0);" class="afegirIngredients" title="Add field"><input type="button" value="Afegir ingredient"></a><br/><br/>
				<div class="passos">					
					<label for="passos">Passos:</label>
					<?php 
					foreach ($passos as $pas) {
											
					echo "<div><input type='text' name='passos[]' value='$pas'/><a href='javascript:void(0);' class='remove_button' title='Remove field'><img class='eliminarLlista' src='img/remove-icon.png' alt='Esborrar'></a></div>";
					 } ?>

																
				</div>
				<a href="javascript:void(0);" class="afegirPassos" title="Add field"><input type="button" value="Afegir passos"></a><br/><br/>
				<input class="btn btn-primary" name="envi" id="envi" type="button" value="Guardar" onclick="enviar();" />
			</form>
			<?php echo"<a href='receptes.php?id=$id'><img src='img/enrrere.png' class='enrrere' alt='enrrere'></a>" ?>
			
			</div>

			<?php  

		}
	} else {
		echo "Formulari buit";
	}

	$conexion->close();

	?>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
