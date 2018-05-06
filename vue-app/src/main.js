import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

Vue.component('example2', function(resolve) {
  resolve(require('./components/Example2.vue'))
})

new Vue({
  el: '#app',
  render: h => h(App)
})
