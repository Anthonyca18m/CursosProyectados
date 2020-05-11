<template>
  <div class="hello">
    <h1>{{ $store.getters.getMsg }}</h1>
    <p></p>
    <h3>Amigos</h3>
    <ul>
      <li>
        <a href="" target="_blank" rel="noopener">babel</a>
        <button>x</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  // props: {
  //   msg: String
  // }
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
