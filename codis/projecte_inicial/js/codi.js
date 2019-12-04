var login=false;
var miCuenta=false;
var click_ff=false;
var click_kh=false;
var click_nier=false;
var click_zelda=false;
var click_league=false;
var click_ori=false;

function login_cl(){		
	if(login==false){
		document.getElementById("log-form").style.display="block";
		document.getElementById("menu-compte").style.display="block";
		login=true;
		miCuenta=true;
	}else{
		document.getElementById("log-form").style.display="none";
		login=false;
	}
}

function myAccount(){		
	if(login==true && miCuenta==true){
		document.getElementById("log-form").style.display="none";
		document.getElementById("menu-compte").style.display="none";
		login=false;
		miCuenta=false;
	}else if(miCuenta==false){
		document.getElementById("menu-compte").style.display="block";
		miCuenta=true;				
	}else if(miCuenta==true){
		document.getElementById("menu-compte").style.display="none";
		miCuenta=false;	
	}
}

function botons_img(buton){
	if(buton=="Final Fantasy"){
		if(click_kh==true){
		document.getElementById("container-kh").style.display="none";
		click_kh=false;
		}else if(click_nier==true){
			document.getElementById("container-nier").style.display="none";
			click_nier=false;
		}else if(click_zelda==true){
			document.getElementById("container-zelda").style.display="none";
			click_zelda=false;
		}else if(click_league==true){
			document.getElementById("container-league").style.display="none";
			click_league=false;
		}else if(click_ori==true){
			document.getElementById("container-ori").style.display="none";
			click_ori=false;
		}
		if(click_ff==false){
			document.getElementById("container-ff").style.display="block";
			click_ff=true;
			document.getElementById("btn-jocs").style.marginBottom="5%";
		}else{
			document.getElementById("container-ff").style.display="none";
			click_ff=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}

	}
	else if(buton=="Kingdom Hearts"){
		if(click_ff==true){
			document.getElementById("container-ff").style.display="none";
			click_ff=false;
		}else if(click_nier==true){
			document.getElementById("container-nier").style.display="none";
			click_nier=false;
		}else if(click_zelda==true){
			document.getElementById("container-zelda").style.display="none";
			click_zelda=false;
		}else if(click_league==true){
			document.getElementById("container-league").style.display="none";
			click_league=false;
		}else if(click_ori==true){
			document.getElementById("container-ori").style.display="none";
			click_ori=false;
		}
		if(click_kh==false){
			document.getElementById("container-kh").style.display="block";
			click_kh=true;
			document.getElementById("btn-jocs").style.marginBottom="5%";
		}else{
			document.getElementById("container-kh").style.display="none";
			click_kh=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}
	}
	else if(buton=="Nier"){
		if(click_ff==true){
		document.getElementById("container-ff").style.display="none";
		click_ff=false;
		}else if(click_kh==true){
			document.getElementById("container-kh").style.display="none";
			click_kh=false;
		}else if(click_zelda==true){
			document.getElementById("container-zelda").style.display="none";
			click_zelda=false;
		}else if(click_league==true){
			document.getElementById("container-league").style.display="none";
			click_league=false;
		}else if(click_ori==true){
			document.getElementById("container-ori").style.display="none";
			click_ori=false;
		}
		if(click_nier==false){
			document.getElementById("container-nier").style.display="block";
			click_nier=true;
			document.getElementById("btn-jocs").style.marginBottom="5%";
		}else{
			document.getElementById("container-nier").style.display="none";
			click_nier=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}	

	}
	else if(buton=="Zelda"){
		if(click_ff==true){
		document.getElementById("container-ff").style.display="none";
		click_ff=false;
		}else if(click_kh==true){
			document.getElementById("container-kh").style.display="none";
			click_kh=false;
		}else if(click_nier==true){
			document.getElementById("container-nier").style.display="none";
			click_nier=false;
		}else if(click_league==true){
			document.getElementById("container-league").style.display="none";
			click_league=false;
		}else if(click_ori==true){
			document.getElementById("container-ori").style.display="none";
			click_ori=false;
		}
		if(click_zelda==false){
			document.getElementById("container-zelda").style.display="block";
			click_zelda=true;
			document.getElementById("btn-jocs").style.marginBottom="5%";
		}else{
			document.getElementById("container-zelda").style.display="none";
			click_zelda=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}
	}
	else if(buton=="League of Legends"){
		if(click_ff==true){
		document.getElementById("container-ff").style.display="none";
		click_ff=false;
		}else if(click_kh==true){
			document.getElementById("container-kh").style.display="none";
			click_kh=false;
		}else if(click_nier==true){
			document.getElementById("container-nier").style.display="none";
			click_nier=false;
		}else if(click_zelda==true){
			document.getElementById("container-zelda").style.display="none";
			click_zelda=false;
		}else if(click_ori==true){
			document.getElementById("container-ori").style.display="none";
			click_ori=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}
		if(click_league==false){
			document.getElementById("container-league").style.display="block";
			click_league=true;
			document.getElementById("btn-jocs").style.marginBottom="5%";
		}else{
			document.getElementById("container-league").style.display="none";
			click_league=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}
	}
	else if(buton=="Ori"){
		if(click_ff==true){
		document.getElementById("container-ff").style.display="none";
		click_ff=false;
		}else if(click_kh==true){
			document.getElementById("container-kh").style.display="none";
			click_kh=false;
		}else if(click_nier==true){
			document.getElementById("container-nier").style.display="none";
			click_nier=false;
		}else if(click_zelda==true){
			document.getElementById("container-zelda").style.display="none";
			click_zelda=false;
		}else if(click_league==true){
			document.getElementById("container-league").style.display="none";
			click_league=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}
		if(click_ori==false){
			document.getElementById("container-ori").style.display="block";
			click_ori=true;
			document.getElementById("btn-jocs").style.marginBottom="5%";
		}else{
			document.getElementById("container-ori").style.display="none";
			click_ori=false;
			document.getElementById("btn-jocs").style.marginBottom="50%";
		}
	}
}		

function cookies_buto() {
  document.getElementById("snackbar").style.display="none";
}

function benvinguda(){

	var porId=document.getElementById("usr").value;
	alert("Hi, "+porId);
}


