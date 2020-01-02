import { Component } from '@angular/core';


@Component({

    selector: 'mi-componente',
    templateUrl: '/mi-componente.component.html',
    styleUrls: ['/mi-componente.component.css']

})

export class MiComponente{
    private msn: string;
    constructor(){
        this.msn="Hola";
        console.log("Componente cargado");
    }
}