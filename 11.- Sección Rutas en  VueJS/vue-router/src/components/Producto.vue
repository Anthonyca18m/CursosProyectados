<template>
  <div class="col-sm-4 mb-2">
    <router-link :to="{ name : 'Product', params : {id : id}}">
      <div class="card card-product" style="width: 18rem;">
        <img
          src="https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1308&q=80"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <h5 class="card-title">Product title</h5>
          <p class="card-text">
            Description of product
            <br />
            <b>Precio-Producto</b>
          </p>
          <a href="#" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </router-link>
  </div>
</template>

<script>
export default {
  name: "ProductoComponent",
  props: ["id"],
  data() {
    return {}
  },
  methods: {}
};
</script>

<style scoped>
.card-product:hover {
  background: rgb(241, 239, 239);
  box-shadow: 5px 5px 5px #c5c5c5;
  top: -2px;
  transition: 0.5s ease-in-out;
}
</style>
