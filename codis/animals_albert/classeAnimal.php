<?php 
abstract class Animal{
protected $nom;
protected $edat;
protected $color;

	private function getNom(){
		return $this->nom;
	}

	private function getEdat(){
		return $this->edat;
	}

	private function getColor(){
		return $this->color;
	}

	abstract public function menjar($aliment);

	abstract public function dormir();

}





 ?>