import { Routes } from '@angular/router';

import { NotFound as PageNotFound } from './domains/info/pages/not-found/not-found';
import { Layout as LayoutComponent } from '@components/layout/layout';

export const routes: Routes = [
  {
    path: '',
    component: LayoutComponent,
    children: [
      { path: '', loadComponent: () => import('./domains/products/pages/list/list') },
      { path: 'about', loadComponent: () => import('./domains/info/pages/about/about') },
      { path: 'products/:id', loadComponent: () => import('./domains/products/pages/product-detail/product-detail') }
    ]
  },

  { path: '**', component: PageNotFound }
];
