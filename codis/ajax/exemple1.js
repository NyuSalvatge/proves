function cargaDocXML(rutaxml){
	alert("se va a cargar");
	var xhttp;
	if(window.XMLHttpRequest){
		xhttp=new XMLHttpRequest();


	}else{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xhttp.open("GET",rutaxml,false); //false=sincrono
	xhttp.send();
	return xhttp.responseXML; //responseText
}