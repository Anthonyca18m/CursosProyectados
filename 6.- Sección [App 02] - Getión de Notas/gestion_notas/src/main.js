import Vue from 'vue'
import App from './App.vue'
import moment from 'moment'

Vue.config.productionTip = false

Vue.filter('formatearFecha', function(value){
    return moment(value).locale('es').format('LLL') + moment(value).format(' a')
})

new Vue({
  render: h => h(App),
}).$mount('#app')
