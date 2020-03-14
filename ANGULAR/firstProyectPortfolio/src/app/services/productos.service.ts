import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ProductoInterface } from '../interfaces/producto.interface';

@Injectable({
  providedIn: 'root'
})
export class ProductosService {

  cargando = true;


  constructor( private http: HttpClient) { 
    this.cargarProductos();

  }

  private cargarProductos(){
    this.http.get("https://angular-rest-d2c11.firebaseio.com/productos.json")
    .subscribe( (resp: ProductoInterface[]) => {

      this.cargando = false;    
      
    });

  }

}
