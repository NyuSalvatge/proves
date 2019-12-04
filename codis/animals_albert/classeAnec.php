<?php 

final class Anec extends Animal{

	private $amorPatuno;
	private $bec;

	public function __construct($nom,$edat,$color,$amorPatuno){
		$this->nom=$nom;
		$this->edat=$edat;
		$this->color=$color;
		$this->amorPatuno=$amorPatuno;
	}	

		public function getAmor(){
		$frase="";
		$img="img/cor.png";
		$mida="22px";
		$alt="cor";
		$frase.= "<p> Mi amor es ".$this->amorPatuno.":";
		 for($i=0;$i<$this->amorPatuno;$i++){
		 	$frase.="<img src=$img width=$mida height=$mida alt=$alt>";
		 }

		 $frase.="</p>";

		return $frase;
	}

	public function getNom(){
		return "Em dic ".$this->nom;
	}

	public function getEdat(){
		return "La meva edad és ".$this->edat;
	}

	public function getColor(){
		return "El meu color és ".$this->color;
	}

	public function parpar(){
		return "cuack!";
	}

	public function menjar($aliment){
		$resultado= "<p>Cuack! mencanta menjar ".$aliment."</p>";
		$this->amorPatuno++;
		$resultado.= "<p>Nivel de amor <3: ".$this->amorPatuno;
		for($i=0;$i<$this->amorPatuno;$i++){
			$resultado.= "<img src='img/cor.png' width='22px' height='22px' alt='cor'>";
		}
		$resultado .= "</p>";
		return $resultado;
	}
	

	public function dormir(){
		echo "cuack...zz~~";
	}

	public function banyarse(){
		echo "cuack...xipxAP~~";
	}

}










?>