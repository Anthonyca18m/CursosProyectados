<template>

      <div class="card">
        <img :src="producto.imagen" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title"> {{ producto.titulo }} <p> S/. {{ producto.precio }}</p> </h5>
          <p class="card-text" > {{ producto.descripcion }} </p>
          <button 
          :disabled="estaEnCarrito"
          @click="agregarCarrito(producto)" 
          class="btn btn-outline-primary btn-block"
          :class="(estaEnCarrito) ? 'bg-primary text-light' : ''"
          > {{ (estaEnCarrito) ? 'COMPRADO' : 'COMPRAR' }} </button>
        </div>
      </div>

</template>

<script>
export default {
  name: "ProductoComp",
  props: ['producto', 'estaEnCarrito'],
  data() {
    return {
    }
  },
  methods: {
    agregarCarrito:function(producto){
        this.$emit('agregarCarrito', producto)
    }
  }
};
</script>

<style>
</style>