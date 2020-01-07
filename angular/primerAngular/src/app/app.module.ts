import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import {MiComponente} from './components/mi-componente/mi-componente.component';
import { SegonCompComponent } from './components/segon-comp/segon-comp.component';

@NgModule({
  declarations: [
    AppComponent,
    MiComponente,
    SegonCompComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }



