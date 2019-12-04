<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>
		class salutacio {
  			constructor(brand) {
   		 	this.carname = brand;
  			}
		

		present() {
    	return "I have a " + this.carname;
  		}
  		}
		
		mycar = new salutacio("Hola");

		 
		alert(mycar.present());
		
	</script>
</body>
</html>