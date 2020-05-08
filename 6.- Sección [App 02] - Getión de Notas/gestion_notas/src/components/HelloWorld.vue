<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1>{{ title }}</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for>Titulo</label>
          <input type="text" class="form-control" v-model="nota.title" />
        </div>
      </div>

      <div class="col-sm-12">
        <div class="form-group">
          <label for>Texto</label>
          <textarea type="text" class="form-control" v-model="nota.text" />
        </div>
      </div>

      <div class="col-sm-12">
        <button @click="agregarNota" class="btn btn-outline-success mr-3">Guardar</button>
        <button class="btn btn-outline-secondary">Cancelar</button>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-sm-6" v-for="(item, index) in notas" :key="index">
        <div class="card m-1 border-info bg-light shadow-sm">
          <div class="float-right mr-2">
            <button type="button" class="close" aria-label="Close"
            @click="eliminarNota(index)">
              <span aria-hidden="true" class="">&times;</span>
            </button>
          </div>
          <div class="card-body">
            
            <h6 class="card-title">{{ item.title }}</h6>
            <p class="card-text">{{ item.text }} <br> 
              <small class="card-text text-muted">{{ item.fecha | formatearFecha }} <i class="fas fa-globe-americas"></i></small>
            </p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: "HelloWorld",
  props: {},
  data() {
    return {
      title: "Gestión de Notas",
      nota: {
        title: "",
        text: ""
      },
      notas: []
    };
  },
  methods: {
    agregarNota: function() {
      let { text, title } = this.nota;

      this.notas.push({
        title,
        text,
        fecha: new Date(Date.now())
      });
    },
    eliminarNota: function(nota){
      return this.notas.splice(nota, 1)
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
