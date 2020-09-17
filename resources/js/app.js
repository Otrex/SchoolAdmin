require('./bootstrap');

// Window.Vue = require("vue")

import Vue from 'vue'
import router from "./router"
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import App from './App.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.config.productionTip = false


new Vue({
  render: h => h(App),
  router
}).$mount('#app')

// const app = new Vue({
//     el : '#app',
// })