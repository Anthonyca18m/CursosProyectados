<template>
  <div>
      <h1>Información Básica</h1>
      <UserComponent />
  </div>
</template>

<script>
// @ is an alias to /src
import UserComponent from '@/components/User.vue'

export default {
    components: {
        UserComponent
    }

}
</script>

<style>

</style>