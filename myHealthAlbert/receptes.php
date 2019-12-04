<?php 
include("header.php");	
    //Si ja ha estat creada anteriorment 
if(isset($_GET['id'])){

	$id= $_GET['id'];
	$sql = "SELECT * FROM plats WHERE id =$id";
	$consulta = $conexion->query($sql);
	if ($consulta->num_rows > 0) {

		while($row = $consulta->fetch_assoc()) {
			$direccio=$row['imatge'];
			$ingredients=json_decode($row['ingredients'], true);
			$passos=json_decode($row['passos'], true);
			echo "<div class='container'>";
			
			?>
			<div class="row">
				<h1 class="col-md-3"><?php echo $row['nom'];?></h1><span class="col-md-2 editar"><?php echo "<a class='editar2' href='editar.php?id=$id'>Editar <img src='img/editar.png' width='25px' height='25px'/></a><br/>"; ?></span>
			</div>
			
			<div class="row">
				<img class="col-md-5" src="<?php echo $direccio;?>" width='400px' height='400px'/>
			</div>

			<div class="row">
				<h2 class="col-md-12">Ingredients:</h2>
				<ul class="col-md-5 aliniar">
					<?php foreach ($ingredients as $ingre) {
						echo "<li>$ingre</li>";
					} ?>
				</ul>
			</div>
			<div class="row">
				<h2 class="col-md-12">Passos:</h2>
				<ul class="col-md-5 aliniar">
					<?php foreach ($passos as $pas) {
						echo "<li>$pas</li>";
					} ?>
				</ul>
			</div>
			<a href="llista_receptes.php"><img src="img/enrrere.png" class="enrrere" alt="enrrere"></a>
		</div>
		
		<?php                       		
	}
} else {
	echo "Sense contingut";
}

//Si es una recepte nova 
}else{
	

    	# La lista de nombres; por defecto vacía
	$ingredients = [];
	$passos = [];
    # Si hay nombres enviados por el formulario; entonces
    # la lista es el formulario.
    # Cada que lo envíen, se agrega un elemento a la lista
	if (isset($_POST["agregar_ingredients"])) {
		$ingredients = $_POST["ingredients"];
	}
	if (isset($_POST["agregar_passos"])) {
		$passos = $_POST["passos"];
	}

    //Aquí es guarda a la base de dades
	if (isset($_POST["guardar"])) {
        # Quieren guardar; no quieren agregar campos
		echo "OK se guarda lo siguiente:<br/>";
		print_r($ingredients);

		exit;
	}

	?>
	<div class="container form-crear">
		<form method="post" action="rebre_info.php" name="miForm" enctype="multipart/form-data">
			<label for="nom">Nom:</label>
			<input type="text" name="nom"><br/>
			<label for="imagen">Imatge</label>
			<input type="file" name="image" id="image" /><br/>
			<div class="ingredients">					
				<label for="ingredients">Ingredients:</label>
				<div><input type="text" name="ingredients[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img class="eliminarLlista" src="img/remove-icon.png" alt="Esborrar"></a></div>									
			</div>
			<a href="javascript:void(0);" class="afegirIngredients" title="Add field"><input type="button" value="Afegir ingredient"></a><br/><br/>
			<div class="passos">					
				<label for="passos">Passos:</label>
				<div><input type="text" name="passos[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img class="eliminarLlista" src="img/remove-icon.png" alt="Esborrar"></a></div>									
			</div>
			<a href="javascript:void(0);" class="afegirPassos" title="Add field"><input type="button" value="Afegir passos"></a><br/><br/>
			
			<input class="btn btn-primary" name="envi" id="envi" type="button" value="Guardar" onclick="enviar();" />
			
		</form>

		<a href="llista_receptes.php"><img src="img/enrrere.png" class="enrrere" alt="enrrere"></a>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php  	
}
?>






