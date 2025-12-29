import { CommonModule } from '@angular/common';
import { Component, EventEmitter, Input, Output } from '@angular/core';
import { ProductModel } from '../../../shared/models/product.model';

@Component({
  selector: 'app-product',
  imports: [CommonModule],
  standalone: true,
  templateUrl: './product.html',
  styleUrl: './product.css',
})
export class Product {

  @Input({required: true}) item!: ProductModel;

  @Output() addToCart = new EventEmitter<string>();

  addToCartHandler(name: string): void {
    this.addToCart.emit(`clic en el producto: ${name} desde el hijo`);
  }
}
