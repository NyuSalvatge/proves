
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
			
			document.getElementById('num').innerHTML=this.responseText;
		

	}
}

}


//generar y ejecutar la peticion

function peticion(){
	alert("hola");
	var valor=document.getElementById("nombre").value;
	valor=encodeURIComponent(valor);
	var querystring="nombre="+valor;
	var valor=document.getElementById("contra").value;
	valor=encodeURIComponent(valor);
	querystring+="&contra="+valor;
	var url="usuarios.php?"+querystring;
	alert(url);
// Paso 3, preparar peticion

ObjectoXMLHttpRequest.open("GET",url,true); //asincrono

// Paso 4, ejecutar peticion

ObjectoXMLHttpRequest.send(null); //no son necesarios

}