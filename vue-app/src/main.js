import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

Vue.component('example2', function(resolve) {
  setTimeout(function() {
    resolve(require('./components/Example2.vue'))
  }, 5000)
})

new Vue({
  el: '#app',
  render: h => h(App)
})
