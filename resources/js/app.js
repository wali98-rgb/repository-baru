require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);

const Home = require('./pages/Home.vue').default
const About = require('./pages/About.vue').default

const routes = [
  {
  	path: '/home',
  	component: Home
  },
  {
  	path: '/about',
  	component: About
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

const app = new Vue({
  el: '#app',
  data: {
    title: 'Laravel8'
  },
  router
});
