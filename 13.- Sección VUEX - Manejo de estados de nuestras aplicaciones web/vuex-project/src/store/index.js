import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    msg : 'Bienvenido al curso VueJS',
    amigos: [],
    amigo : 'Jose'
  },
  mutations: {
    addAmigo:function(state){
      state.amigos = [state.amigo, ...state.amigos]
    }
  },
  actions: {
    addAmigoAction:function(context){
      context.commit('addAmigo')
    }
  },
  modules: {
  },
  getters: {
    getMsg:function(state){
      return state.msg
    },
    getAmigos:function(state){
      return state.amigos
    }
  }
})
