<?php 

final class Gos extends Animal{

	private $amorPerruno;

	public function __construct($nom,$edat,$color,$amorPerruno){
		$this->nom=$nom;
		$this->edat=$edat;
		$this->color=$color;
		$this->amorPerruno=$amorPerruno;
	}	

	public function getAmor(){
		$frase="";
		$img="img/cor.png";
		$mida="22px";
		$alt="cor";
		$frase.= "<p> Mi amor es ".$this->amorPerruno.":";
		 for($i=0;$i<$this->amorPerruno;$i++){
		 	$frase.="<img src=$img width=$mida height=$mida alt=$alt>";
		 }

		 $frase.="</p>";

		return $frase;
	}

	public function getNom(){
		return "Me llamo ".$this->nom;
	}

	public function getEdat(){
		return "Mi  edad es ".$this->edat;
	}

	public function getColor(){
		return "Mi color es: ".$this->color;
	}

		public function bordar(){
			return "Guau! Guau!";
		}

		public function menjar($aliment){
			$resultado= "<p> Guau! mencanta menjar ".$aliment."</p>";
			$this->amorPerruno++;
			$resultado.= "<p>Nivel de amor <3: ".$this->amorPerruno;
			for($i=0;$i<$this->amorPerruno;$i++){
			$resultado.= "<img src='img/cor.png' width='22px' height='22px' alt='cor'>";
		}
			$resultado .= "</p>";
		return $resultado;
	
		}

		public function dormir(){
			echo "guau...zz~~";
		}

	}




	?>