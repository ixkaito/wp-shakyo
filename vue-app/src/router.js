import Vue from 'vue'
import Router from 'vue-router'
import function1 from './functions/function1.vue';

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/function1',
      name: 'function1',
      component: function1
    },
  ]
})
