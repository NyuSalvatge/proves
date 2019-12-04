var objectoXMLHttpRequest;
try{//para todos los navegadores excepto IE 6 o anteriores

objectoXMLHttpRequest=new XMLHttpRequest();

}catch(e){

	try{ //internet exploder version 2
		objectoXMLHttpRequest=new ActiveXObject("XSXML2.XMLHTTP");

	}catch(e1){//internet antiguos

		try{
			objectoXMLHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e2){
			
			objectoXMLHttpRequest=false; //no está soportado
		}

	}

}