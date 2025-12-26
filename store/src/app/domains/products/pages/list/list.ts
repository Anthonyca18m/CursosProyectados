import { Component } from '@angular/core';
import { Product } from '../../components/product/product';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-list',
  standalone: true,
  imports: [CommonModule, Product],
  templateUrl: './list.html',
  styleUrl: './list.css',

})
export class List {
  products = [
    { id: 1, name: 'Producto 1', img: 'https://picsum.photos/200/300?random=1', description: 'Descripción del Producto 1', price: 10.00 },
    { id: 2, name: 'Producto 2', img: 'https://picsum.photos/200/300?random=2', description: 'Descripción del Producto 2', price: 20.00 },
    { id: 3, name: 'Producto 3', img: 'https://picsum.photos/200/300?random=3', description: 'Descripción del Producto 3', price: 30.00 },
    { id: 4, name: 'Producto 4', img: 'https://picsum.photos/200/300?random=4', description: 'Descripción del Producto 4', price: 40.00 },
    { id: 5, name: 'Producto 5', img: 'https://picsum.photos/200/300?random=5', description: 'Descripción del Producto 5', price: 50.00 },
    { id: 6, name: 'Producto 6', img: 'https://picsum.photos/200/300?random=6', description: 'Descripción del Producto 6', price: 60.00 },
  ];

  onAddToCart(message: string): void {
    console.log(message);
    console.log('Producto agregado al carrito desde el padre');
  }
}
