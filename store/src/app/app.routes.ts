import { Routes } from '@angular/router';

import { List as PageList } from './domains/products/pages/list/list';
import { About as PageAbout } from './domains/info/pages/about/about';

export const routes: Routes = [
  { path: '', component: PageList },
  { path: 'about', component: PageAbout }
];
