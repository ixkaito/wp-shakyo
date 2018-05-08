import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

Vue.component('wp-blog-header.php', function(resolve) {
  resolve(require('./files/wp-blog-header.php.vue'))
})

new Vue({
  render: h => h(App)
}).$mount('#app')
