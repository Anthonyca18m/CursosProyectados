import { CommonModule } from '@angular/common';
import { Component, EventEmitter, inject, Input, Output, signal } from '@angular/core';
import { ProductModel } from '../../models/product.model';
import { CartService } from './cart.service';

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

  private cartService = inject(CartService);

  get cartTotalFormat(): string {
    return this.cartService.getCartTotalFormat();
  }

  closeCart(): void {
    this.isOpen = false;
    this.closed.emit();

    console.log('Cart closed');
  }

}
