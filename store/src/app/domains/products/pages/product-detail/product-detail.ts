import { ProductModel } from '@models/product.model';
import { Component, inject, Input, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ProductService } from '@services/product-service';
import { CartService } from '@services/cart-service';

@Component({
  selector: 'app-product-detail',
  standalone: true,
  imports: [
    CommonModule
  ],
  templateUrl: './product-detail.html',
  styleUrl: './product-detail.css',
})
export class ProductDetail {

  @Input() id?: string;

  productDetail = signal<ProductModel | null>(null);

  coverImg = signal<string>('');
  inCart = signal<boolean>(false);

  private productService = inject(ProductService);
  private cartService = inject(CartService);

  ngOnInit(): void {
    console.log(this.id)
    if (this.id) {
      this.productService.getProductById(parseInt(this.id)).subscribe({
        next: (data: any) => {
          this.productDetail.set(data);
          if (data.images && data.images.length > 0) {
            this.setConverImg(data.images[0]);
          }
          this.inCart.set(this.cartService.verifyInCart(data.id));
          console.log('Product details loaded:', data);
        },
        error: (err:any) => {
          console.error('Error loading product details:', err?.message);
        }
      });
    } else {
      console.error('No product ID provided');
    }
  }

  setConverImg(imgUrl: string): void {
    this.coverImg.set(imgUrl);
  }

  addCart(): void {
    const product = this.productDetail();
    if (product) {
      this.cartService.addToCart(product);
      this.inCart.set(this.cartService.verifyInCart(product.id));
      console.log('Product added to cart from detail page');
    } else {
      console.error('No product details available to add to cart');
    }
  }
}
