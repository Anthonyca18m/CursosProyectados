import { Component, inject, Input, signal } from '@angular/core';
import { Product } from '../../components/product/product';
import { CommonModule } from '@angular/common';

import { ProductModel } from '@models/product.model';
import { CartService } from '@services/cart-service';
import { ProductService } from '@services/product-service';
import { CategoryService } from '@services/category-service';
import { CategoryModel } from '@models/category.model';
import { RouterLink } from "@angular/router";
import { ca } from 'date-fns/locale';

@Component({
  selector: 'app-list',
  standalone: true,
  imports: [CommonModule, Product, RouterLink],
  templateUrl: './list.html',
  styleUrl: './list.css',

})
export class List {
  products = signal<ProductModel[]>([]);
  categories = signal<CategoryModel[]>([]);

  @Input() category_id?: string;

  // Inyectar el servicio del carrito
  private cartService = inject(CartService);
  private productService = inject(ProductService);
  private categoryService = inject(CategoryService);

  ngOnInit(): void {
    this.getCategories();
    this.getProducts();
  }

  ngOnChanges(): void {
    this.getProducts(this.category_id);
  }

  getCategories() {
    this.categoryService.getCategories().subscribe({
      next: (data) => {
        this.categories.set(data);
        console.log('Categorías cargadas:', data);
      },
      error: (err) => {
        console.error('Error loading categories:', err);
      }
    });
  }

  getProducts(category_id?: string) {
    this.productService.getProducts(category_id).subscribe({
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
