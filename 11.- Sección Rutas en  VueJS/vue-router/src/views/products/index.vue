<template>
  <div class="container">
      <h1 class="bg-info mt-5 rounded text-center p-3 text-light">PRODUCTOS</h1>
      <div class="row border rounded m-1 p-2">

        <producto-component v-for="(item, index) in 10" :key="index" />
        
      </div>
  </div>
</template>

<script>
 import ProductoComponent  from "@/components/Producto.vue";

export default {
  components: {
    ProductoComponent
  }
}
</script>

<style>

</style>