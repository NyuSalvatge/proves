
<?php 

$conexion = mysqli_connect('localhost', 'root', '','animalets');
$cons=mysqli_query($conexion,"select tipus from animals where tipus='gat'"); 
$numRegistros=mysqli_num_rows($cons);
if($numRegistros>5){
header("Location: https://www.youtube.com/watch?v=lAIGb1lfpBw");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<title>Test</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div style="margin-top:3%;">
					<form action="testAnimals.php" style="background-color: rgba(255,255,255,0.8); border-radius: 4%;">
						<h3 style="text-align:center; color:#CA348DFF; text-shadow: 2px 2px 3px #D22C40FF;">Quin animal t'agrada?</h3>
						<input onclick="gat();" type="radio" name="rad" value="gat" style="margin-left:12%;"> Gat
						<input onclick="gos();" type="radio" name="rad" value="gos" style="margin-left:12%;"> Gos
						<input onclick="anec();" type="radio" name="rad" value="anec" style="margin-left:12%;"> Anec 
						<input onclick="esquirol();" type="radio" name="rad" value="esquirol" style="margin-left:12%;"> Esquirol  
						<div id="formu" style="display:none;">
							<h1 style="display:none;color:#D22C40FF; text-shadow: 2px 2px 3px #CA348DFF; text-align: center;" id="formGat">Com vols que sigui el gat?</h1>
							<h1 style="display:none;color:#D22C40FF; text-shadow: 2px 2px 3px #CA348DFF; text-align: center;" id="formAnec">Com vols que sigui l'ànec?</h1>
							<h1 style="display:none;color:#D22C40FF; text-shadow: 2px 2px 3px #CA348DFF; text-align: center;" id="formGos">Com vols que sigui el gos?</h1>
							<h1 style="display:none;color:#D22C40FF; text-shadow: 2px 2px 3px #CA348DFF; text-align: center;" id="formEsquirol">Com vols que sigui l'esquirol?</h1>
							<label for="nom">Nom:</label>
							<input type="text" class="form-control" id="nom" placeholder="nom" name="nom">

							<label for="edad">Edat:</label>
							<input type="text" class="form-control" id="edat" placeholder="edat" name="edat">

							<label for="color">Color:</label>
							<select name="color">
								<option value="taronja">Taronja</option>
								<option value="blanc">Blanc</option>
							</select>
							<label for="amor">Amor:</label>
							<input type="text" class="form-control" id="amor" placeholder="amor" name="amor">
							<input type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" id="rowAnimals">
					<h1>El teu bitxo!</h1>
					<?php 
					include("classeAnimal.php");
					include("classeGos.php");
					include("classeGat.php");
					include("classeAnec.php");
					include("classeEsquirol.php");
					include("amistats.php");
					$amistats= new Amistats();
					
					if (!$conexion) {
						die('<strong>No pudo conectarse:</strong> ' . mysqli_connect_error());}

						mysqli_query($conexion,"insert into animals(nom,edat,color,amor,tipus) values ('$_REQUEST[nom]','$_REQUEST[edat]','$_REQUEST[color]','$_REQUEST[amor]','$_REQUEST[rad]')");
						$query=mysqli_query($conexion,"select nom,edat,color,amor,tipus from animals");
						$numRegistros=mysqli_num_rows($query);
						$arrayNom=array();
						$arrayEdat=array();
						$arrayColor=array();
						$arrayAmor=array();
						$arrayTipus=array();
						?>
						<script>
						var numAnimals = '<?php echo $numRegistros;?>'
						for(i=0;i<numAnimals;i++){
						var node = document.createElement("div");
						node.setAttribute("id","animal"+i);
						node.setAttribute("class","col-md-3");
						node.setAttribute("style", "border: 1px solid purple; background-color: rgba(255,255,255,0.3);");
						document.getElementById("rowAnimals").appendChild(node);
						}     
						</script>
						<?php
						if($numRegistros>0){
							for($i=0;$i<$numRegistros;$i++){  
								$reg=mysqli_fetch_array($query);
								$arrayNom[$i]=$reg['nom'];
								$arrayEdat[$i]=$reg['edat'];
								$arrayColor[$i]=$reg['color'];
								$arrayAmor[$i]=$reg['amor'];
								$arrayTipus[$i]=$reg['tipus'];
								$arguments[]=array();
								$arguments[0]=$arrayNom[$i];
								$arguments[1]=$arrayEdat[$i];
								$arguments[2]=$arrayColor[$i];
								$arguments[3]=$arrayAmor[$i];
								if($arrayTipus[$i]=="gat"){
									$amistats->afegirAmic("gat",$arguments);
									if($arrayColor[$i]=="blanc"){
										$a='img/cat2.png';
									}else{
										$a='img/cat.png';
									}
									$cadena="";
									$cadena.= $amistats->toString($a,$i);
									$cadena.= $amistats->parlar($i);
									$cadena.=$amistats->getAmors($i);
									
						
									?>
									<script>
									var numAnimals = '<?php echo $cadena;?>';
									var iteracio = '<?php echo $i;?>'
									 $("#animal"+iteracio).html(numAnimals);
									</script>
									<?php
									


								}else if($arrayTipus[$i]=="gos"){
									$amistats->afegirAmic("gos",$arguments);
									if($arrayColor[$i]=="blanc"){
										$a='img/dog2.png';
									}else{
										$a='img/dog.png';
									}
									$cadena="";
									$cadena .= $amistats->toString($a,$i);
									$cadena .= $amistats->parlar($i);
									$cadena .= "<p>";
									$cadena .=$amistats->getAmors($i);
									$cadena .= "</p>";
									//$cadena .= "<img src=$a width='400px;' height='300px;' alt='miau' class='costat'>";
									?>
									<script>
									var numAnimals = '<?php echo $cadena;?>';
									var iteracio = '<?php echo $i;?>'
									 $("#animal"+iteracio).html(numAnimals);
									</script>

									<?php
								}
								else if($arrayTipus[$i]=="anec"){
									$amistats->afegirAmic("anec",$arguments);
									if($arrayColor[$i]=="blanc"){
										$a='img/anec2.png';
									}else{
										$a='img/anec.png';
									}
									$cadena="";
									$cadena .= $amistats->toString($a,$i);
									$cadena .= $amistats->parlar($i);
									$cadena .= "<p>";
									$cadena .=$amistats->getAmors($i);
									$cadena .= "</p>";
									//$cadena .= "<img src=$a width='400px;' height='300px;' alt='miau' class='costat'>";
									?>
									<script>
									var numAnimals = '<?php echo $cadena;?>';
									var iteracio = '<?php echo $i;?>'
									 $("#animal"+iteracio).html(numAnimals);
									</script>

									<?php
								}	
								else if($arrayTipus[$i]=="esquirol"){
									$amistats->afegirAmic("esquirol",$arguments);
									if($arrayColor[$i]=="blanc"){
										$a='img/esquirol2.png';
									}else{
										$a='img/esquirol.png';
									}
									$cadena="";
									$cadena .= $amistats->toString($a,$i);
									$cadena .= $amistats->parlar($i);
									$cadena .= "<p>";
									$cadena .=$amistats->getAmors($i);
									$cadena .= "</p>";
									//$cadena .= "<img src=$a width='400px;' height='300px;' alt='miau' class='costat'>";
									
									?>
									<script>
									var numAnimals = '<?php echo $cadena;?>';
									var iteracio = '<?php echo $i;?>'
									 $("#animal"+iteracio).html(numAnimals);
									</script>
									<?php
		
								}		
							}
						}

						mysqli_close($conexion);
					
						?>
					
				</div>
			</div>
			<script src="js/bootstrap.min.js"></script>
		</body>
		<script>

			function gat(){
				document.getElementById("formGat").style.display="block";
				document.getElementById("formGos").style.display="none";
				document.getElementById("formAnec").style.display="none";
				document.getElementById("formu").style.display="block";
				document.getElementById("formEsquirol").style.display="none";
			}

			function gos(){
				document.getElementById("formGos").style.display="block";
				document.getElementById("formGat").style.display="none";
				document.getElementById("formAnec").style.display="none";
				document.getElementById("formu").style.display="block";
				document.getElementById("formEsquirol").style.display="none";
			}

			function anec(){
				document.getElementById("formAnec").style.display="block";
				document.getElementById("formGat").style.display="none";
				document.getElementById("formGos").style.display="none";
				document.getElementById("formu").style.display="block";
				document.getElementById("formEsquirol").style.display="none";
			}

			function esquirol(){
				document.getElementById("formEsquirol").style.display="block";
				document.getElementById("formAnec").style.display="none";
				document.getElementById("formGat").style.display="none";
				document.getElementById("formGos").style.display="none";
				document.getElementById("formu").style.display="block";
			}
		</script>
		</html>
