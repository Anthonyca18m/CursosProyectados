<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1> {{ title }} </h1>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="">Titulo</label>
          <input type="text" class="form-control" v-model="nota.title">
        </div>
      </div>

      <div class="col-sm-12">
        <div class="form-group">
          <label for="">Texto</label>
          <textarea type="text" class="form-control" v-model="nota.text" />
        </div>
      </div>

      <div class="col-sm-12">
        <button @click="agregarNota" class="btn btn-outline-success mr-3">Guardar</button>
        <button class="btn btn-outline-secondary">Cancelar</button>
      </div>

      
    </div>
  </div>
 
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    
  },
  data () {
    return {
      title : 'Gestión de Notas',
      nota : {
        title : '',
        text : ''
      },
      notas : [
        {
          title : '',
          text : '',
          fecha : ''
        }
      ]
    }
  },
  methods: {
    agregarNota: function(){
      
      let {text, title} = this.nota
      
      this.notas.push({
        title,
        text,
        fecha : new Date( Date.now() ).toLocaleString()
      })

    }
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
