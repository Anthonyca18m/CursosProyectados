import { CommonModule } from '@angular/common';
import { Component, inject, signal } from '@angular/core';
import { Cart } from '../cart/cart';
import { CartService } from '@services/cart-service';

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

  // Inyectar el servicio del carrito
  cartService = inject(CartService);

  // Ahora puedes acceder al cart así:
  cart = this.cartService.getCart();

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
