import { Component, signal } from '@angular/core';
import { Product } from '../../components/product/product';
import { CommonModule } from '@angular/common';

import { ProductModel } from '../../../shared/models/product.model';

@Component({
  selector: 'app-list',
  standalone: true,
  imports: [CommonModule, Product],
  templateUrl: './list.html',
  styleUrl: './list.css',

})
export class List {
  products = signal<ProductModel[]>([]);

  constructor() {

    const initProducts: ProductModel[] = [
      { id: 1, name: 'Producto 1', img: 'https://picsum.photos/200/300?random=1', description: 'Descripción del Producto 1', price: 10.00 },
      { id: 2, name: 'Producto 2', img: 'https://picsum.photos/200/300?random=2', description: 'Descripción del Producto 2', price: 20.00 },
      { id: 3, name: 'Producto 3', img: 'https://picsum.photos/200/300?random=3', description: 'Descripción del Producto 3', price: 30.00 },
    ];

    this.products.set(initProducts);
  }

  onAddToCart(message: string): void {
    console.log(message);
    console.log('Producto agregado al carrito desde el padre');
  }
}
