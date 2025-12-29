import { CommonModule } from '@angular/common';
import { Component, signal } from '@angular/core';
import { Cart } from '../cart/cart';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [
    CommonModule,
    Cart
  ],
  templateUrl: './header.html',
  styleUrl: './header.css',
})
export class Header {

  isCartOpen = signal<boolean>(false);

  

  openCart(): void {
    // Logic to open the cart goes here
    this.isCartOpen.set(true);
    console.log('Cart opened');
  }

  closeCart(): void {
    this.isCartOpen.set(false);
    console.log('Cart closed from header');
  }
}
