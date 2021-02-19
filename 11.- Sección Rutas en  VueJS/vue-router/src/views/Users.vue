<template>
  <div class="container">
      <router-link 
      :to=" { name : 'Users', params: { id: item.name } } " 
      v-for="(item, index) in arrUsers" :key="index">
          <button>
              {{ item.name }}
          </button>
      </router-link>

      <h1>Información Básica</h1>
      <UserComponent />
  </div>
</template>

<script>
// @ is an alias to /src
import UserComponent from '@/components/User.vue'

export default {
    data() {
        return {
            arrUsers : [
                {name : 'Anthony'},
                {name : 'Tom'},
                {name : 'Diego'},
                {name : 'Edgar'}
            ]
        }
    },
    components: {
        UserComponent
    }

}
</script>

<style>

</style>