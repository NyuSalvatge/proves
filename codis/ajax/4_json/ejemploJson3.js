
// Paso 1, crear el objeto XMLHttp request

var ObjectoXMLHttpRequest;
try{//para todos los navegadores excepto IE 6 o anteriores

	ObjectoXMLHttpRequest=new XMLHttpRequest();

}catch(e){

	try{ //internet exploder version 2
		ObjectoXMLHttpRequest=new ActiveXObject("XSXML2.XMLHTTP");

	}catch(e1){//internet antiguos

		try{
			ObjectoXMLHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e2){
			
			ObjectoXMLHttpRequest=false; //no está soportado
		}
	}
}

// Paso 2, asignar funcion encargada del pocedimiento del evento
ObjectoXMLHttpRequest.onreadystatechange=procesaRespuesta;

function procesaRespuesta(){
	if(ObjectoXMLHttpRequest.readyState==4){
		//datos estan listos
		if(ObjectoXMLHttpRequest.status==200){
			
		//alert(ObjectoXMLHttpRequest.responseText);
		var frutas=eval("("+ObjectoXMLHttpRequest.responseText+")");
		for(i=0;i<frutas.length;i++){
			document.getElementById("noticias").innerHTML+=frutas[i].title+" "+
			frutas[i].artist+" "+frutas[i].country+" "+frutas[i].company+" "+frutas[i].price+" "+
			frutas[i].year+"<br/><br/>";	
		}	

	}
}

}


//generar y ejecutar la peticion

function peticion(){
// Paso 3, preparar peticion

ObjectoXMLHttpRequest.open("GET","catalog.json",true); //asincrono

// Paso 4, ejecutar peticion

ObjectoXMLHttpRequest.send(null); //no son necesarios

}