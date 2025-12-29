import { ProductModel } from '@models/product.model';
import { Component, inject, Input, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ProductService } from '@services/product-service';

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

  private productService = inject(ProductService);

  ngOnInit(): void {
    console.log(this.id)
    if (this.id) {
      this.productService.getProductById(parseInt(this.id)).subscribe({
        next: (data: any) => {
          this.productDetail.set(data);
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
}
