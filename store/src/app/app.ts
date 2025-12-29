import { CommonModule } from '@angular/common';
import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { Header } from './domains/shared/components/header/header';

@Component({
  selector: 'app-root',
  imports: [CommonModule, RouterOutlet, Header],
  // templateUrl: './app.html',
  template: `<app-header /> <router-outlet></router-outlet>`,
  // styleUrls: ['./app.css']
})
export class App {
  protected readonly title = signal('store');
}
