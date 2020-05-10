<template>
  <div class="mt-5">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in prod" :key="index">
          <th scope="row"> {{ index+1 }} </th>
          <td> {{ item.titulo }} </td>
          <td> {{ item.precio }} </td>
          <td> 
              <button 
              @click="eliminarProducto(index)"
              class="badge badge-danger">Eliminar</button> 
          </td>
        </tr>
        <tr>
          <th ></th>
          <td class="font-weight-bold text-right">Total:</td>
          <td class="font-weight-bold"> S/. {{ totalCarrito }} </td>
          <td></td>
        </tr>
      </tbody>    
    </table> 
    

    <button v-if="efectuandoPago" class="text-center bg-info rounded p-1 btn-block" disabled>
        <div class="spinner-border text-light " role="status">
            <span class="sr-only text-center"></span>
        </div>
    </button>

    <button 
    v-else  
    :disabled="totalCarrito === 0"
    @click="savePago()" class="btn btn-info btn-block">PAGAR</button>
  </div>
</template>

<script>
export default {
  name: "CarritoComp",
  props : ['prod'],
  data() {
    return {
        efectuandoPago: false
    }
  },
  methods: {
      eliminarProducto:function(index){
          this.prod.splice(index, 1)
      },
      savePago:function(){
          this.efectuandoPago = true
          setTimeout(() => {
              this.efectuandoPago = false
              this.$emit("pagar")
          }, 1000);
      }
  },
  computed: {
      totalCarrito:function(){
          return this.prod.reduce( (acum, item) => acum + Number(item.precio), 0)
      }
  },
};
</script>

<style>
</style>