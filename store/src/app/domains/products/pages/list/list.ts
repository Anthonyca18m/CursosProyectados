import { Component, inject, signal } from '@angular/core';
import { Product } from '../../components/product/product';
import { CommonModule } from '@angular/common';

import { ProductModel } from '@models/product.model';
import { CartService } from '@services/cart-service';
import { ProductService } from '@services/product-service';

@Component({
  selector: 'app-list',
  standalone: true,
  imports: [CommonModule, Product],
  templateUrl: './list.html',
  styleUrl: './list.css',

})
export class List {
  products = signal<ProductModel[]>([]);

  // Inyectar el servicio del carrito
  private cartService = inject(CartService);
  private productService = inject(ProductService);

  ngOnInit(): void {
    // Simular la carga de productos
    this.productService.getProducts().subscribe({
      next: (data) => {
        this.products.set(data);
        console.log('Productos cargados:', data);
      },
      error: (err) => {
        console.error('Error loading products:', err);
      }
    })
  }

  // Ahora el cart se maneja en el servicio
  cart = this.cartService.getCart();

  onAddToCart(p: ProductModel): void {
    // Usar el servicio para agregar productos
    this.cartService.addToCart(p);
    console.log('Producto agregado al carrito desde el padre');
  }
}
