<?php 

final class Esquirol extends Animal{

	private $amorEsquiroli;

	public function __construct($nom,$edat,$color,$amorEsquiroli){
		$this->nom=$nom;
		$this->edat=$edat;
		$this->color=$color;
		$this->amorEsquiroli=$amorEsquiroli;
	}	

	public function getAmor(){
		$frase="";
		$img="img/cor.png";
		$mida="22px";
		$alt="cor";
		$frase.= "<p> Mi amor es ".$this->amorEsquiroli.":";
		 for($i=0;$i<$this->amorEsquiroli;$i++){
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

	public function nye(){
		echo "NyannNyannn!";
	}

	public function menjar($aliment){
		$resultado= "<p>Meooow! mencanta menjar ".$aliment."</p>";
		$this->amorEsquiroli++;
		$resultado.= "<p>Nivel de amor <3: ".$this->amorEsquiroli;
		for($i=0;$i<$this->amorEsquiroli;$i++){
			$resultado.= "<img src='img/cor.png' width='22px' height='22px' alt='cor'>";
		}
		$resultado .= "</p>";
		return $resultado;
	}

	public function dormir(){
		echo "nyan...zz~~";
	}

}













?>