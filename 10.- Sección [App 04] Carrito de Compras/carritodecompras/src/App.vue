<template>
  <div id="app">

    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-light text-center bg-info p-5">
          <h1>CARRITO DE COMPRAS</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 rounded p-1 border-right border-left">
          <div class="row">
            <div class="col-sm-5 m-1" v-for="(item, index) in productosJson" :key="index">
              <ProductoComp :producto="item" v-on:agregarCarrito="agregarprodCarro" 
              :estaEnCarrito="estaEnCarrito(item)" 
              />
            </div>
            
          </div>
        </div>

        <div class="col-sm-4 rounded border-right">
            <CarritoComp :prod="carrito" v-on:pagar="pagar()"/>
        </div>

        
      </div>
    </div>
    
    

  </div>
</template>

<script>
import ProductoComp from './components/ProductoComp'
import  CarritoComp  from "./components/CarritoComp";

import Productos from './data/productos.json'

export default {
  name: 'App',
  components: {
    ProductoComp,
    CarritoComp
  },
  data(){
    return{
      productosJson : Productos,
      carrito: []
    }
  },
  methods: {
    estaEnCarrito:function(producto){
      const item = this.carrito.find( item => item.id === producto.id )
      if (item) {
        return true
      } else {
        return false
      }
    },
    agregarprodCarro:function(producto){
      if (this.estaEnCarrito(producto) === false) {
        this.carrito.push(producto)
      }
    },
    pagar:function(){
      return this.carrito = []
    }
  },
}
</script>

<style>

</style>
