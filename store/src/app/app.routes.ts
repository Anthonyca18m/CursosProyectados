import { Routes } from '@angular/router';

import { List as PageList } from './domains/products/pages/list/list';
import { About as PageAbout } from './domains/info/pages/about/about';
import { NotFound as PageNotFound } from './domains/info/pages/not-found/not-found';
import { Layout as LayoutComponent } from '@components/layout/layout';
import { ProductDetail as PageProductDetail } from './domains/products/pages/product-detail/product-detail';

export const routes: Routes = [
  {
    path: '',
    component: LayoutComponent,
    children: [
      { path: '', component: PageList },
      { path: 'about', component: PageAbout },
      { path: 'products/:id', component: PageProductDetail }
    ]
  },

  { path: '**', component: PageNotFound }
];
