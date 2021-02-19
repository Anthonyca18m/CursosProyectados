import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ProductoInterface } from '../interfaces/producto.interface';

@Injectable({
  providedIn: 'root'
})
export class ProductosService {

  cargando = true;
  productos: ProductoInterface[] = [];

  productosFiltrado: ProductoInterface[] = [];

  constructor(private http: HttpClient) {

    this.cargarProductos();

  }

  private cargarProductos() {

    return new Promise((resolve, reject) => {
      this.http.get("https://angular-rest-d2c11.firebaseio.com/productos_idx.json")
        .subscribe((resp: ProductoInterface[]) => {

          this.cargando = false;
          this.productos = resp;
          resolve(); // significa que la promesa ya se cumplio correctamente
          // setTimeout(() => {
          //   this.cargando = false; 
          // }, 2000);

        });
    });


  }

  getProducto(id: string) {
    return this.http.get(`https://angular-rest-d2c11.firebaseio.com/productos/${id}.json`);
  }

  //el backtick `` el js6 deja poder variables con el ${}

  buscarProducto(termino: string) {

    if (this.productos.length == 0) {
      //cargar productos
      this.cargarProductos().then( ()=> {
        //ejecutar despues de tener los productos
        //aplicar filtros
        this.filtrarProductos(termino);
      });

    }else{//aplicar filtro
      this.filtrarProductos(termino);
    }

    // this.productosFiltrado = this.productos.filter(producto => {
    //   return true;
    // });

    
  }

  private filtrarProductos(termino: string){
    //console.log(this.productos);
    this.productosFiltrado= []; // resetea el arreglo del buscador
    
    termino = termino.toLocaleLowerCase();//sensitivo a Mm

    this.productos.forEach( prod => {

      const tituloLower = prod.titulo.toLocaleLowerCase();

      if(prod.categoria.indexOf( termino ) >= 0 || tituloLower.indexOf(termino) >= 0){//comparamos si son iguales al arreglo y al producto
        this.productosFiltrado.push( prod);
      }
    });

  }

}