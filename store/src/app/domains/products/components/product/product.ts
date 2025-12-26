import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-product',
  imports: [CommonModule],
  standalone: true,
  templateUrl: './product.html',
  styleUrl: './product.css',
})
export class Product {
  img: string = `https://picsum.photos/200/300?random=${Math.random()}`;
}
