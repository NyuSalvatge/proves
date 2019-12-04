
$(document).ready(function(){

    var butoIngre = $('.afegirIngredients'); //Botó desancadenant
    var butoPassos = $('.afegirPassos'); //Botó desancadenant
    var wrapper = $('.ingredients'); //Dins on passarà
    var wrapper2 = $('.passos'); //Dins on passarà
    var ingredients = '<div><input type="text" name="ingredients[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img class="eliminarLlista" src="img/remove-icon.png" alt="eliminar"></a></div>'; //L'input que es creara
    var passos = '<div><input type="text" name="passos[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img class="eliminarLlista" src="img/remove-icon.png" alt="eliminar"></a></div>'; //L'input que es creara

    //Afegir Input ingredients
    $(butoIngre).click(function(){ 
            $(wrapper).append(ingredients);       
    });

    //Afegir Input passos
     $(butoPassos).click(function(){ 
            $(wrapper2).append(passos);      
    });

     //Esborrar input ingredients
    $(wrapper).on('click', '.remove_button', function(e){ 
        e.preventDefault();
        $(this).parent('div').remove();       
    });
    //Esborrar input passos
     $(wrapper2).on('click', '.remove_button', function(e){ 
        e.preventDefault();
        $(this).parent('div').remove();      
    });
});


//comprovar camps buits
function enviar(){
   var controlador=true;
   var numInputs =document.getElementsByTagName("input").length;

    for (var i = 0; i < numInputs; i++) {

        if(document.getElementsByTagName("input")[i].type=='text'){
           if(document.getElementsByTagName("input")[i].value=="" || numInputs <7 || document.getElementsByTagName("input")[2].type!='text' || document.getElementsByTagName("input")[numInputs-3].type!='text' ){
            controlador=false;
            break;
           } 

        }      
     }
   
  
 if(controlador==false){

    alert("S'han d'omplir tots els camps menys l'imatge");
 }else{
    document.miForm.submit();
 }

}

var formulario = document.getElementById("form"),
    controlador = true;
 
formulario.addEventListener("submit", function(event){
    event.preventDefault();
 
    var elementos = this.elements;
    for (var i in elementos){
        if (!elementos[i].value.length){
            alert("Debe de completar el campo " + elementos[i].name);
            comodin = false;
            break;
        }
    }
 
    if (comodin){
        this.submit();
    }
}, false);