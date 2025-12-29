import { HttpClient } from '@angular/common/http';
import { inject, Injectable } from '@angular/core';
import { ProductModel } from '../models/product.model';

@Injectable({
  providedIn: 'root',
})
export class ProductService {

  private http = inject(HttpClient);

  getProducts() {
    return this.http.get<ProductModel[]>('https://fakestoreapi.com/products');
  }

  getProductById(id: number) {
    return this.http.get<ProductModel>(`https://fakestoreapi.com/products/${id}`);
  }
}
