import Vue from 'vue'
import Router from 'vue-router'
import Home from './files/Home.vue'
import About from './files/About.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    }
  ]
})
