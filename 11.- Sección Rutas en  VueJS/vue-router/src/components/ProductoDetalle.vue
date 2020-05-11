<template>
  <div class="col-sm-12 mt-2 border rounded">
      <h1 class="text-center font-weight-bold">Product title {{ id }} </h1>
      <img src="https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1308&q=80" 
        class="img-fluid" alt="..." />

      <p class="m-2 ">
        Description of product<br>
        <b>Precio-Producto</b>
      </p>
      <a href="#" class="btn btn-primary float-right m-2"> Buy</a>

  </div>
</template>

<script>
export default {
  name: "ProductoDetalleComponent",
  data() {
    return {
        id : this.$route.params.id
    };
  },
  methods: {}
};
</script>

<style>
</style>