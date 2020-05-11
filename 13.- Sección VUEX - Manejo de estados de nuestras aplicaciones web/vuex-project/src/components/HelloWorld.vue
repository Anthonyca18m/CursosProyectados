<template>
  <div class="hello">
    <h1>{{ $store.getters.getMsg }}</h1>
    <p></p>
    <h3>Amigos</h3>
    <input type="text" name="" id="" v-model="amigo"
    @keyup.enter="addAmigo(amigo)">
    <button @click="addAmigo(amigo)">Agregar Amigo</button>
    <ul>
      <li v-for="(item, index) in $store.getters.getAmigos" :key="index">
        <a href="" target="_blank" rel="noopener"> {{ item }} </a>
        <button @click="eliminarAmigo(index)">x</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      amigo : ''
    }
  },
  // props: {
  //   msg: String
  // }
  methods: {
    addAmigo:function(){
      this.$store.dispatch('addAmigoAction', this.amigo)
      return this.amigo = ''
    },
    eliminarAmigo:function(index){
      return this.$store.dispatch('eliminarAmigoActivo', index)
    }
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
