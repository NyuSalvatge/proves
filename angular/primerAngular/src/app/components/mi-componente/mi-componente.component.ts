import { Component } from '@angular/core';


@Component({

    selector: 'mi-componente',
    templateUrl: '/mi-componente.component.html',
    styleUrls: ['/mi-componente.component.css']

})

export class MiComponente{
    private msn: string;
    cargar:Boolean =false;
    constructor(){
        this.msn="Hola";
        setTimeout(() => {
            this.cargar = true;
          }, 5000);
        console.log("Componente cargado");
    }
}

