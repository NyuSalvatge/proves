<?php 

final class Gat extends Animal{

	private $amorGatuno;
	private $bigotis;

	public function __construct($nom,$edat,$color,$amorGatuno){
		$this->nom=$nom;
		$this->edat=$edat;
		$this->color=$color;
		$this->amorGatuno=$amorGatuno;
	}	

	public function getAmor(){
		$frase="";
		$img="img/cor.png";
		$mida="22px";
		$alt="cor";
		$frase.= "<p> Mi amor es ".$this->amorGatuno.":";
		 for($i=0;$i<$this->amorGatuno;$i++){
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

	public function miolar(){
		return "Miaaaaaaau!";
	}

	public function menjar($aliment){
		$resultado = "<p>Meooow! mencanta menjar ".$aliment."</p>";
		$this->amorGatuno++;
		
		$resultado .= "<p>Nivel de amor <3: ".$this->amorGatuno;
		for($i=0;$i<$this->amorGatuno;$i++){
			$resultado .= "<img src='img/cor.png' width='22px' height='22px' alt='cor'>";
		}
		$resultado .= "</p>";
		return $resultado;
	}

	public function dormir(){
		echo "meoww...zz~~";
	}

}

?>