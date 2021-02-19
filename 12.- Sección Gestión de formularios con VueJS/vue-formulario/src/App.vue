<template>
  <div id="app">
    <!-- <HelloWorld/> -->
    <FormularioComponent />
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import FormularioComponent from './components/Formulario.vue'

export default {
  name: 'App',
  components: {
    // HelloWorld
    FormularioComponent
  }
}
</script>

<style>
@import '../node_modules/boostrap/dist/css/bootstrap.min.css';
</style>
