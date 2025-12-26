import { CommonModule } from '@angular/common';
import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-product',
  imports: [CommonModule],
  standalone: true,
  templateUrl: './product.html',
  styleUrl: './product.css',
})
export class Product {

  @Input({required: true}) img: string = `https://picsum.photos/200/300?random=${Math.random()}`;
  @Input({required: true}) name: string = 'Nombre del Producto';
  @Input({required: true}) description: string = 'Descripción del Producto';
  @Input({required: true}) price: number = 0.00;

  @Output() addToCart = new EventEmitter<string>();

  addToCartHandler(name: string): void {
    this.addToCart.emit(`clic en el producto: ${name} desde el hijo`);
  }
}
