import { Routes } from '@angular/router';

import { Home as HomeComponent } from './pages/home/home';
import { Labs as labsComponent } from './pages/labs/labs';


export const routes: Routes = [
    {
        path: 'home',
        component: HomeComponent
    },
    {
        path: 'labs',
        component: labsComponent
    }
];
