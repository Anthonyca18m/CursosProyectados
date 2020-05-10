<template>
  <div id="app">
    <div class="container">
      <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/">Home</router-link>
        </a>
        <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/products">Products</router-link>
        </a>
        <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/about">About</router-link>
        </a>
        <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/contact">Contact</router-link>
        </a>
        <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/users">Users</router-link>
        </a>
        <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/login">Login</router-link>
        </a>
        <!-- <a class="nav-item nav-link">
          <router-link class="nav-item nav-link" to="/signup">Signup</router-link>
        </a> -->
      </nav>
      <router-view/>
    </div>
  </div>
</template>

<style>
 
@import '../node_modules/boostrap/dist/css/bootstrap.min.css';

.router-link-exact-active{
  background: blue;
  color: white;
}

</style>
