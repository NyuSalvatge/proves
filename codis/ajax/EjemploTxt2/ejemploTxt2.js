
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
			document.getElementById("noticias").innerHTML=ObjectoXMLHttpRequest.responseText;

			//metodo split() se usa para dividir una cadena (string) en una matriz de subcadenas y devuelve un array
			var noticias=ObjectoXMLHttpRequest.responseText.split("\n");
			
			for(i=0;i<noticias.length;i++){
				var estanoticia=noticias[i].split(" ");
				var miau=estanoticia[2].split(":");

				document.getElementById("n1").innerHTML+=miau[0]+"->"+miau[1]+"<br/>";
			}
		}
	}

}


//generar y ejecutar la peticion

function peticion(){
// Paso 3, preparar peticion

ObjectoXMLHttpRequest.open("GET","ejemploTxt2.txt",true); //asincrono

// Paso 4, ejecutar peticion

ObjectoXMLHttpRequest.send(null); //no son necesarios

}