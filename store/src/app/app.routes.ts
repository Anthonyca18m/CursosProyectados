import { Routes } from '@angular/router';

import { List as PageList } from './domains/products/pages/list/list';
import { About as PageAbout } from './domains/info/pages/about/about';
import { NotFound as PageNotFound } from './domains/info/pages/not-found/not-found';
import { Layout as LayoutComponent } from '@components/layout/layout';

export const routes: Routes = [
  {
    path: '',
    component: LayoutComponent,
    children: [
      { path: '', component: PageList },
      { path: 'about', component: PageAbout },
    ]
  },

  { path: '**', component: PageNotFound }
];
