import { CommonModule } from '@angular/common';
import { Component, EventEmitter, Input, Output } from '@angular/core';
import { ProductModel } from '../../models/product.model';

@Component({
  selector: 'app-cart',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './cart.html',
  styleUrl: './cart.css',
})
export class Cart {

  @Input() isOpen: boolean = false;
  @Output() closed = new EventEmitter<void>();

  @Input() cart: ProductModel[] = [];

  closeCart(): void {
    this.isOpen = false;
    this.closed.emit();

    console.log('Cart closed');
  }

}
