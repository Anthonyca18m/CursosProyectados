import { CommonModule } from '@angular/common';
import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  imports: [CommonModule, RouterOutlet],
  // templateUrl: './app.html',
  template: `<router-outlet></router-outlet>`,
  // styleUrls: ['./app.css']
})
export class App {
  protected readonly title = signal('store');
}
