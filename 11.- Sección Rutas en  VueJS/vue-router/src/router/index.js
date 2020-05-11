import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Contact from '../views/Contact.vue'
import Users from '../views/Users.vue'
import Login from '../views/Login.vue'
import Signup from '../views/Signup.vue'
import ProductIndex from '../views/products/index.vue'
import Product from '../views/products/ProductoDetail.vue'

Vue.use(VueRouter)

  const routes = [
  { path: '/', name: 'Home', component: Home },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: About //() => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  { path: '/contact', name: 'Contact', component: Contact },
  { path: '/users/:id', name: 'Users', component: Users },
  { path: '/login', name: 'Login', component: Login },
  { path: '/signup', name: 'Signup', component: Signup },
  { path: '/products', name: 'ProductIndex', component: ProductIndex },
  { path: '/product/:id', name: 'Product', component: Product },

  // REDIRECCIONANDO A PAGINAS POR DEFAULT
  { path : '/registrarse', redirect : '/signup' },
  { path : '/*', redirect : '/' }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
