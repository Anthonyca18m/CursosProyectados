<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form class="form-signin text-center">
          <img class="mb-4 img-fluid" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="150" />
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>

          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" class="form-control mb-3" placeholder="Email" required autofocus />

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" class="form-control" placeholder="Password" required />

          <div class="checkbox mb-3 mt-1 float-left">
            <label>
              <input type="checkbox" value="remember-me" /> Recordarme
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          <br>
          <p  class="text-muted">Eres nuevo? <a  class="text-dark" @click="enviarSignup()"> Registrate Aquí</a></p>
          <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {

    }
  },
  methods: {
    enviarSignup:function(){
      this.$router.push('/signup')
    }
  },
};
</script>

<style>
</style>