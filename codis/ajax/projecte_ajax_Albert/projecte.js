
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
			var noticias=ObjectoXMLHttpRequest.responseText.split("\n");

			for(i=0;i<noticias.length;i++){
				var seccio=noticias[i].split("_");
				for(j=0;j<seccio.length;j++){
					if(j==0){
						if(i==0){
						document.getElementById("puntuacio").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("puntuacio2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("puntuacio3").innerHTML=seccio[j];
					}}else if(j==1){
						if(i==0){
						document.getElementById("nom").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("nom2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("nom3").innerHTML=seccio[j];
					}}else if(j==2){
						if(i==0){
						document.getElementById("tipus").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("tipus2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("tipus3").innerHTML=seccio[j];
					}}else if(j==3){
						if(i==0){
						document.getElementById("reviews").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("reviews2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("reviews3").innerHTML=seccio[j];
					}}else if(j==4){
						if(i==0){
						document.getElementById("pDolar").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("pDolar2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("pDolar3").innerHTML=seccio[j];
					}}else if(j==5){
						if(i==0){
						document.getElementById("sDolar").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("sDolar2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("sDolar3").innerHTML=seccio[j];
					}}else if(j==6){
						if(i==0){
						document.getElementById("dire").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("dire2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("dire3").innerHTML=seccio[j];
					}}else if(j==7){
						if(i==0){
						document.getElementById("num").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("num2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("num3").innerHTML=seccio[j];
					}}else if(j==8){
						if(i==0){
						document.getElementById("web").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("web2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("web3").innerHTML=seccio[j];
					}}else if(j==9){
						if(i==0){
						document.getElementById("estat").innerHTML=seccio[j];
						}else if(i==1){document.getElementById("estat2").innerHTML=seccio[j];
						}else if(i==2){ document.getElementById("estat3").innerHTML=seccio[j];
					}}else if(j==10){
						if(i==0){
						document.getElementById("imatge").src=seccio[j];
						}else if(i==1){document.getElementById("imatge2").src=seccio[j];
						}else if(i==2){ document.getElementById("imatge3").src=seccio[j];}
					}
				}
			}


		}
	}

}


//generar y ejecutar la peticion

function peticion(){
	
	// var valor=document.getElementById("nombre").value;
	// valor=encodeURIComponent(valor);
	// var querystring="nombre="+valor;
	// var valor=document.getElementById("contra").value;
	// valor=encodeURIComponent(valor);
	// querystring+="&contra="+valor;
	// var url="usuarios.php?"+querystring;
	// alert(url);
// Paso 3, preparar peticion

ObjectoXMLHttpRequest.open("GET","dades.txt",true); //asincrono

// Paso 4, ejecutar peticion

ObjectoXMLHttpRequest.send(null); //no son necesarios

}


