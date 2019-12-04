<?php 


class persona{
	private $nom;


	public function __construct($nom){
		$this->nom=$nom;
				
	}

	public function getNom(){
		return $this->nom;
	}
}

$p= new persona("Albert");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="rebre.php" method="post">
 		
	<input type="text" name="nom" value=<?php echo $p->GetNom();?>>
	<input type="submit" value="Submit">

 	</form>
 	
 </body>
 </html>