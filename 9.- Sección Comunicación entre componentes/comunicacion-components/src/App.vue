<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <hello-world msg="Welcome to Your Vue.js App"/>
    <hello-world msg="Welcome to Your Vue.js App"/>
    <hello-world msg="Welcome to Your Vue.js App"/>
    <!-- podemos llamarlo asi 
    ya que vue deja opcion a reemplazar las 
    mayusculas por minusculas y - guiones

    asi simplicamos más el código al llamar al componente
    o tambien podemos hacer con la directiva v-for y con una sola linea
    estariamos repitiendo el componente varias veces si es necesario
     -->
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
