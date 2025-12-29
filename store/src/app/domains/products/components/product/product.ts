import { CommonModule } from '@angular/common';
import { Component, EventEmitter, Input, Output } from '@angular/core';
import { ProductModel } from '../../../shared/models/product.model';

@Component({
  selector: 'app-product',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './product.html',
  styleUrl: './product.css',
})
export class Product {

  @Input({required: true}) item!: ProductModel;

  @Output() addToCart = new EventEmitter<ProductModel>();

  addToCartHandler(product: ProductModel): void {
    this.addToCart.emit(product);
  }
}
