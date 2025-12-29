import { Injectable, signal } from '@angular/core';
import { ProductModel } from '../../models/product.model';

@Injectable({
  providedIn: 'root'
})
export class CartService {
  private cart = signal<ProductModel[]>([]);

  // Getter para leer el cart
  getCart() {
    return this.cart.asReadonly();
  }

  // Método para agregar productos
  addToCart(product: ProductModel): void {
    if (!this.verifyInCart(product.id)) {
      this.cart.set([...this.cart(), product]);
      console.log('Producto agregado al carrito');
    }
  }

  verifyInCart(productId: number): boolean {
    return this.cart().some(p => p.id === productId);
  }

  // Método para remover productos
  removeFromCart(productId: number): void {
    this.cart.set(this.cart().filter(p => p.id !== productId));
  }

  // Método para limpiar el carrito
  clearCart(): void {
    this.cart.set([]);
  }

  // Método para obtener el total de items
  getCartCount(): number {
    return this.cart().length;
  }

  getCartTotal(): number {
    return this.cart().reduce((total, product) => total + product.price, 0);
  }

  getCartTotalFormat(): string {
    return `$ ${this.getCartTotal().toFixed(2)}`;
  }
}
