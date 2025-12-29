import { CartService } from '@services/cart-service';
import { CommonModule } from '@angular/common';
import { Component, EventEmitter, inject, Input, Output, signal } from '@angular/core';
import { ProductModel } from '@models/product.model';
import { RouterLink } from "@angular/router";
import { DateInNowPipe } from '../../../shared/pipes/date-in-now-pipe';

@Component({
  selector: 'app-product',
  standalone: true,
  imports: [
    CommonModule,
    RouterLink,
    DateInNowPipe
  ],
  templateUrl: './product.html',
  styleUrl: './product.css',
})
export class Product {

  @Input({required: true}) item!: ProductModel;

  @Output() addToCart = new EventEmitter<ProductModel>();

  isCartProduct = signal<boolean>(false);

  // Inyectar el servicio del carrito
  private cartService = inject(CartService);

  ngOnInit(): void {
    this.isCartProduct.set(this.cartService.verifyInCart(this.item.id));
  }

  addToCartHandler(product: ProductModel): void {
    this.addToCart.emit(product);

    this.isCartProduct.set(this.cartService.verifyInCart(product.id));
  }
}
