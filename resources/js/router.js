import Vue from 'vue'
import VueRouter from 'vue-router'

// Load the neccessary components for the router
import Home from "./components/pages/Home.vue";
import Pages from "./components/pages/Pages.vue";
import Files from "./components/pages/Files.vue";
import WebPages from "./components/pages/WebPages.vue";

Vue.use(VueRouter);

const router = new VueRouter({
  routes : [
    {
        path: "/",
        component: Home
    },

    {
        path: "/pages",
        component: Pages
    },

    {
      path: "/code/files",
      component: Files
    },
    {
      path: "/code/webpages",
      component: WebPages
    }
  ],

})

export default router;