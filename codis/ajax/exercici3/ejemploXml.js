
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
			alert("Datos recibidos correctamente");

			var cd=ObjectoXMLHttpRequest.responseXML.getElementsByTagName("CD");
			alert(cd.length);
		
			for(i=0;i<cd.length; i++){
				x=cd[i].childNodes.length;
				for(j=0;j<x;j++){
				if(cd[i].childNodes[j].nodeName=="TITLE"){
					titulo=cd[i].childNodes[j].childNodes[0].nodeValue;
					document.getElementById('titol').innerHTML+=titulo+"<br/>";
				}
				else if(cd[i].childNodes[j].nodeName=="PRICE"){
					precio=cd[i].childNodes[j].childNodes[0].nodeValue;
					document.getElementById('precio').innerHTML+=precio+"<br/>";
				}
				
				}
				
			}

		}
	}

}


//generar y ejecutar la peticion

function peticion(){
// Paso 3, preparar peticion

ObjectoXMLHttpRequest.open("GET","catalog.xml",true); //asincrono

// Paso 4, ejecutar peticion

ObjectoXMLHttpRequest.send(null); //no son necesarios

}