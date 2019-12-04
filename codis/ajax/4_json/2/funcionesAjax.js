/*--- Crear objecte XMLHttlRequest ------------------------------------*/
var ObjetoXMLHttpRequest;

try{//para todos los navegadores excepto IE 6 o anteriores
	ObjetoXMLHttpRequest = new XMLHttpRequest();
}
catch(e){
	try{//Internet explorer versión 2
		ObjetoXMLHttpRequest = new ActiveXObject("XSXML2.XMLHTTP");
	}
	catch(e1){//IE antics
		try{
			ObjetoXMLHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e2){
			ObjetoXMLHttpRequest = false; //no está soportado
		}
	}
}
/*--------------------------------------------------------------------*/

// assignar una funció encarregada del procés de l'event
ObjetoXMLHttpRequest.onreadystatechange = procesaRespuesta;

function procesaRespuesta(){
	//var cadena = "";

	if(ObjetoXMLHttpRequest.readyState == 4){ //les dades han arrivat totes
		if(ObjetoXMLHttpRequest.status == 200){//resposta correcta
			var fruita=eval("("+ObjectoXMLHttpRequest.responseText+")");
			//cadena ="<table><tr><th>Nom</th><th>Preu</th><th>Procedència</th><th>Quantitat</th></tr>";
			for(i=0;i<fruita.length;i++){
				//cadena += "<tr><td>"+fruita[i].nombre+"</td><td>"+fruita[i].precio+"</td>";
				//cadena += "<td>"+fruita[i].procedencia+"</td><td>"+fruita[i].cantidad+"</td></tr>";
			}
			//cadena += "</table>";
			//document.getElementById("frutas").innerHTML = cadena;
			
		}

	}

}
// generar i executar la petició
function peticion(){
	//preparo
	ObjetoXMLHttpRequest.open("GET", "frutas.json", true);//asíncrono
	//executo
	ObjetoXMLHttpRequest.send(null);
}