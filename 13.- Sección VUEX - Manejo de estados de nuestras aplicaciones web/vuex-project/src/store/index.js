import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    msg : 'Bienvenido al curso VueJS',
    amigos: []
  },
  mutations: {
    addAmigo:function(state, amigo){
      state.amigos = [amigo, ...state.amigos]
    }
  },
  actions: {
    addAmigoAction:function(context, amigo){
      context.commit('addAmigo', amigo)
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
