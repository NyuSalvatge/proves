<?php 


class Amistats{

	private $animals=array();
	public function __construct(){}

	public function afegirAmic($animal,$arguments){

		if($animal=="esquirol"){
		$this->animals[]=new Esquirol($arguments[0],$arguments[1],$arguments[2],$arguments[3]);
		}
		if($animal=="gat"){		
		$this->animals[]=new Gat($arguments[0],$arguments[1],$arguments[2],$arguments[3]);
		}
		if($animal=="gos"){
		$this->animals[]=new Gos($arguments[0],$arguments[1],$arguments[2],$arguments[3]);
		}
		if($animal=="anec"){
		$this->animals[]=new Anec($arguments[0],$arguments[1],$arguments[2],$arguments[3]);}
	}

	public function toString($a,$i){
		$info="";
		$width="50px";
		$height="40px";
		$alt="animal";
		$info.= "<p><img src=$a width=$width height=$height alt=$alt>".$this->animals[$i]->getNom()."<p>";
		$info.= "<p><img src=$a width=$width height=$height alt=$alt>".$this->animals[$i]->getEdat()."<p>";
		$info.= "<p><img src=$a width=$width height=$height alt=$alt>".$this->animals[$i]->getColor()."<p>";
		return $info;

	}

	public function parlar($i){
		if(is_a($this->animals[$i], "Gat")){	
			return $this->animals[$i]->miolar();
		}
		if(is_a($this->animals[$i], "Gos")){	
			return $this->animals[$i]->bordar();
		}
		if(is_a($this->animals[$i], "Anec")){	
			return $this->animals[$i]->parpar();
		}
		if(is_a($this->animals[$i], "Esquirol")){	
			return $this->animals[$i]->nye();
		}
	}

	public function getAmors($i){
		return $this->animals[$i]->getAmor();
	}

	public function menjar($i,$menjar){
		 return $this->animals[$i]->menjar($menjar);
	}

}





 ?>