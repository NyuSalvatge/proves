<?php 

$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

$letra=$_REQUEST['q'];

$propuesta="";
if($letra !==""){
	$letra= strtolower($letra);
	$len=strlen($letra);
	foreach($a as $name){
		if(stristr($letra, substr($name,0,$len))){

			if($propuesta===""){//si es el primer cop iguala 
				$propuesta=$name;
			}else{
				$propuesta .=", $name"; //si es el segon cop concatena
			}
		}
	}
}

echo $propuesta=""?"no hay sugerencias":$propuesta;

 ?>