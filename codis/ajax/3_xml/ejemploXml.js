
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
			document.getElementById("noticias").innerHTML=ObjectoXMLHttpRequest.responseXML;

			//metodo split() se usa para dividir una cadena (string) en una matriz de subcadenas y devuelve un array
			var titulos=ObjectoXMLHttpRequest.responseXML.getElementsByTagName("titulo");
			
			for (i=1;i<titulos.length+1;i++){
				if(i%2==0){
					if(titulos[i].nodeType==1){
						alert(titulos[i].nodeName);
						alert(titulos[i].childNodes[0].nodeValue);
						alert(titulos[i].childNodes[1].nodeValue);
						alert("hola");
					}
				}
			}

		}
	}

}


//generar y ejecutar la peticion

function peticion(){
// Paso 3, preparar peticion

ObjectoXMLHttpRequest.open("GET","noticias3.xml",true); //asincrono

// Paso 4, ejecutar peticion

ObjectoXMLHttpRequest.send(null); //no son necesarios

}