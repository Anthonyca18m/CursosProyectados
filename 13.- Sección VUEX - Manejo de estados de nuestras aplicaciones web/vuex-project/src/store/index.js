import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    msg : 'Bienvenido al curso VueJS'
  },
  mutations: {
  },
  actions: {
  },
  modules: {
  },
  getters: {
    getMsg:function(state){
      return state.msg
    }
  }
})
