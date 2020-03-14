import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ProductosService } from '../../services/productos.service';
import { ProductoDetalleInterface } from '../../interfaces/productoDetalle.interface';

@Component({
  selector: 'app-item',
  templateUrl: './item.component.html',
  styleUrls: ['./item.component.css']
})
export class ItemComponent implements OnInit {

  cargando = true;

  constructor( private route: ActivatedRoute, public productoService: ProductosService) {//para leer la url 

  }

  ngOnInit(): void {

    this.route.params.subscribe(
      parametros => {
        // console.log(parametros);
        this.productoService.getProducto(parametros['id']).subscribe(
          (producto : ProductoDetalleInterface) => {
            // console.log(producto);
            this.cargando = false;
          }
        );
      }
    );
  }

}
