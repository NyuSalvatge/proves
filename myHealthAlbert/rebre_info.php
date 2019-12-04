<?php 
include("header.php");
$nom_imatge = $_FILES['image']['name'];
$carpetaDesti="img/";
$nom=$_POST["nom"];

$ingredients=json_encode($_REQUEST['ingredients']);
$passos=json_encode($_REQUEST['passos']);

//si es una edicio
if(isset($_GET['id'])){
	$id=$_GET["id"];
	//update de nom
	$sql2 = "UPDATE plats SET nom='".$nom."',ingredients='".$ingredients."',passos='".$passos."' WHERE id=$id";
	if ($conexion->query($sql2) === TRUE) { 
	} else {
			echo "Error updating record: " . $conexion->error;
		}	
	// miro si ha canviat la imatge
	if($nom_imatge!=''){
		$direccio=$carpetaDesti.$nom_imatge;		
		//update de imatge
		$sql = "UPDATE plats SET imatge='".$direccio."' WHERE id=$id";

		//si ha funcionat
		if ($conexion->query($sql) === TRUE) {
			//miro que la nova imatge sigui de format correcte
			if($_FILES["image"]["type"]=="image/jpeg" || $_FILES["image"]["type"]=="image/pjpeg" || $_FILES["image"]["type"]=="image/png")
			{
    		// si la carpeta existeix o s'ha creat
				if(file_exists($carpetaDesti) || @mkdir($carpetaDesti))
				{
					$origen=$_FILES["image"]["tmp_name"];
					$destino=$carpetaDesti.$nom_imatge;
         		// es guarda la imatge
					if(@move_uploaded_file($origen, $destino))
					{					
					}else{

						echo "Error al pujar la imatge";
					}
				}else{
					echo "Error en trobar la carpeta destí";
				}
			}else{
				echo "Format invalid";
			}
			
		} else {
			echo "Error updating record: " . $conexion->error;
		}
	}

	header('Location:receptes.php?id='.$id);

}
//es una recepte nova
else{

	if($_FILES["image"]["type"]=="image/jpeg" || $_FILES["image"]["type"]=="image/pjpeg" || $_FILES["image"]["type"]=="image/png")
	{
    // si la carpeta existeix o s'ha creat
		if(file_exists($carpetaDesti) || @mkdir($carpetaDesti))
		{
			$origen=$_FILES["image"]["tmp_name"];
			$destino=$carpetaDesti.$nom_imatge;

         // es guarda la imatge
			if(@move_uploaded_file($origen, $destino))
			{				
				$direccio=$carpetaDesti.$nom_imatge;
				

				$sql = "INSERT INTO plats (nom,imatge,ingredients,passos)
				VALUES ('".$nom."','".$direccio."','".$ingredients."','".$passos."')";

				if ($conexion->query($sql) === TRUE) {
					
					header('Location:llista_receptes.php');
				} else {
					echo "Error: " . $sql . "<br>" . $conexion->error;
				}

			}else{

				echo "Error al pujar la imatge";
			}
		}else{
			echo "Error en trobar la carpeta destí";
		}
	}else{
		$direccio=$carpetaDesti."default.jpg";
		$sql = "INSERT INTO plats (nom,imatge,ingredients,passos)
		VALUES ('".$nom."','".$direccio."','".$ingredients."','".$passos."')";

		if ($conexion->query($sql) === TRUE) {
			header('Location:llista_receptes.php');
		} else {
			echo "Error: " . $sql . "<br>" . $conexion->error;
		}
	}

}
$conexion->close();
?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>