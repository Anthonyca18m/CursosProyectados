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

    const initProducts: ProductModel[] = [];

    for (let index = 0; index < 12; index++) {
      initProducts.push({
        id: index + 6,
        name: `Producto ${index + 6}`,
        img: `https://picsum.photos/200/300?random=${index + 6}`,
        description: `Descripción del Producto ${index + 6}`,
        price: (index + 6) * 10.00
      });
    }

    this.products.set(initProducts);
  }

  onAddToCart(message: string): void {
    console.log(message);
    console.log('Producto agregado al carrito desde el padre');
  }
}
