<template>
  <div class="container">
      <form @submit.prevent="enviar()">
          <div class="row">
              <div class="col-sm-12">
                  <h1>Formulario Component</h1>
                  <hr>
                  <div class="form-group">
                      <label for="">Nombre:</label>
                      <input type="text" name="" id="" class="form-control" v-model="datosP.nombre">
                  </div>
                  <div class="form-group">
                      <label for="">E-mail:</label>
                      <input type="email" name="" id="" class="form-control" v-model="datosP.email">
                  </div>
                  <div class="form-group">
                      <label for="">Mensaje:</label><br>
                      <textarea name="" id="" cols="158" class="form-control" rows="10" v-model="datosP.mensaje"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="">Opciones:</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="" value="option1" v-model="datosP.opciones">
                        <label class="form-check-label" for="">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="" value="option2" v-model="datosP.opciones">
                        <label class="form-check-label" for="">2</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="">Género:</label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="genero" id="" value="M" v-model="datosP.genero">
                          <label class="form-check-label" for="">
                              Hombre
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="genero" id="" value="F" v-model="datosP.genero">
                          <label class="form-check-label" for="">
                              Mujer
                          </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="">Turno:</label>
                      <select name="" id="" class="form-control" v-model="datosP.turnoSelect">
                          <option value="" selected disabled>SELECCIONAR TURNO</option>
                          <option v-for="item in datosP.turnos" :key="item"> {{ item }} </option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row">
              <button type="submit" class="btn btn-success">
                  Enviar
              </button>
          </div>
      </form>

      <div class="row m-5 rounded border" v-if="enviado">
          <div class="col-sm-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Datos Ingresados</h3>
                </div>
                <div class="panel-body">
                    <p>Nombre : {{ datosP.nombre }} </p>
                    <p>Email : {{ datosP.email }} </p>
                    <p>Mensaje : <br> {{ datosP.mensaje }}</p>
                    <p>Opciones elegidas : {{ datosP.opciones.join(' ') }}</p>
                    <p>Género : {{ datosP.genero }} </p>
                    <p>Turno Seleccionado : {{ datosP.turnoSelect }} </p>
                </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    name: 'FormularioComponent',
    data () {
        return {
            datosP : {
                nombre : '',
                email : '',
                mensaje : '',
                opciones : [],
                genero : '',
                turnos : ['Mañana', 'Tarde', 'Noche'],
                turnoSelect : '',
            },
            enviado : false
        }
    },
    methods: {
        enviar:function(){
            this.enviado = true
        }
    },
}
</script>

<style>

</style>