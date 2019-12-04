var nombreExp=/^([A-ZÀÁÌÍÒÓÉÈÚÙ]{1}[a-zñáéíóúçàèò]+[\s]*)+$/
var mailExp=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
var dniExp=/^[0-9]{8,8}[A-Za-z]$/;
var movilExp=/^[6|7][0-9]{8}$/


function enviar(){
  var n = document.miForm.nombre.value;
  var a = document.miForm.apellido.value;
  var e = document.miForm.email.value;
  var rE = document.miForm.rEmail.value;
  var d = document.miForm.dni.value;
  var m = document.miForm.movil.value; 

  var resNombre=nombreExp.test(n);
  var resApell=nombreExp.test(a);
  var resEmail=mailExp.test(e);
  var resRemail=mailExp.test(rE);
  var resDni=dniExp.test(d);
  var resMovil=movilExp.test(m);

  if(resNombre && resApell && resEmail & resRemail && resDni && resMovil && document.miForm.email.value==document.miForm.rEmail.value){
    document.miForm.nombre.style.borderColor="";
    document.getElementById("nombre2").innerHTML="";
    document.miForm.apellido.style.borderColor="";
    document.getElementById("apellido2").innerHTML="";
    document.miForm.dni.style.borderColor="";
    document.getElementById("dni2").innerHTML="";
    document.miForm.movil.style.borderColor="";
    document.getElementById("movil2").innerHTML="";
    document.miForm.email.style.borderColor="";
    document.getElementById("email2").innerHTML="";
    document.miForm.rEmail.style.borderColor="";
    document.getElementById("rEmail2").innerHTML="";
    var url = "recieveFromIndex.php";
    $.ajax({                        
     type: "POST",                 
     url: url,                     
     data: $("#miForm").serialize(), 
     success: function(data)             
     {
       $('#respuesta').html(data);               
     }
   }); 
  }else{
    if(resNombre){
      document.miForm.nombre.style.borderColor="";
      document.getElementById("nombre2").innerHTML="";
    }else if(document.miForm.nombre.value==""){
      document.miForm.nombre.style.borderColor="red";
      document.getElementById("nombre2").style.color="red";
      document.getElementById("nombre2").innerHTML="Campo obligatorio";
    }
    else{
      document.miForm.nombre.style.borderColor="red";
      document.getElementById("nombre2").style.color="red";
      document.getElementById("nombre2").innerHTML="Ha de empezar en mayúscula y no puede contener números";
    }

    if(resApell){
      document.miForm.apellido.style.borderColor="";
      document.getElementById("apellido2").innerHTML="";
    }else if(document.miForm.apellido.value==""){
      document.miForm.apellido.style.borderColor="red";
      document.getElementById("apellido2").style.color="red";
      document.getElementById("apellido2").innerHTML="Campo obligatorio";
    }
    else{
      document.miForm.apellido.style.borderColor="red";
      document.getElementById("apellido2").style.color="red";
      document.getElementById("apellido2").innerHTML="Ha de empezar en mayúscula y no puede contener números";
    }

    if(resDni){
      document.miForm.dni.style.borderColor="";
      document.getElementById("dni2").innerHTML="";
    }else if(document.miForm.dni.value==""){
      document.miForm.dni.style.borderColor="red";
      document.getElementById("dni2").style.color="red";
      document.getElementById("dni2").innerHTML="Campo obligatorio";
    }
    else{
      document.miForm.dni.style.borderColor="red";
      document.getElementById("dni2").style.color="red";
      document.getElementById("dni2").innerHTML="DNI no válido";
    }

    if(resMovil){
      document.miForm.movil.style.borderColor="";
      document.getElementById("movil2").innerHTML="";
    }else if(document.miForm.movil.value==""){
      document.miForm.movil.style.borderColor="red";
      document.getElementById("movil2").style.color="red";
      document.getElementById("movil2").innerHTML="Campo obligatorio";
    }
    else{
      document.miForm.movil.style.borderColor="red";
      document.getElementById("movil2").style.color="red";
      document.getElementById("movil2").innerHTML="Movil no válido, ha de tener formato español";
    }  
    if(document.miForm.email.value!=document.miForm.rEmail.value){
      document.miForm.email.style.borderColor="red";
      document.getElementById("email2").style.color="red";
      document.getElementById("email2").innerHTML="Los emails no coinciden:";
      document.miForm.rEmail.style.borderColor="red";
      document.getElementById("rEmail2").style.color="red";
      document.getElementById("rEmail2").innerHTML="Los emails no coinciden:";
    }
    else{     
     if(resEmail){
      document.miForm.email.style.borderColor="";
      document.getElementById("email2").innerHTML="";
    }else if(document.miForm.email.value==""){
      document.miForm.email.style.borderColor="red";
      document.getElementById("email2").style.color="red";
      document.getElementById("email2").innerHTML="Campo obligatorio";
    }
    else{
      document.miForm.email.style.borderColor="red";
      document.getElementById("email2").style.color="red";
      document.getElementById("email2").innerHTML="Mail no válido, escríbelo en minúscula";
    }

    if(resRemail){
      document.miForm.rEmail.style.borderColor="";
      document.getElementById("rEmail2").innerHTML="";
    }else if(document.miForm.rEmail.value==""){
      document.miForm.rEmail.style.borderColor="red";
      document.getElementById("rEmail2").style.color="red";
      document.getElementById("rEmail2").innerHTML="Campo obligatorio";
    }
    else{
      document.miForm.rEmail.style.borderColor="red";
      document.getElementById("rEmail2").style.color="red";
      document.getElementById("rEmail2").innerHTML="Mail no válido, escríbelo en minúscula";
    }
  }


}

}