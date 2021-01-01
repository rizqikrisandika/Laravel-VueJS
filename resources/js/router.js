import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './views/Home.vue'
import About from './views/About.vue'
import Articel from './views/Articel.vue'

Vue.use(VueRouter)

const router =  new VueRouter({
    mode: 'history',
    routes: [
       {
        path: '/',
        name: 'Home',
        component: Home
       },
       {
           path: '/about',
           name: 'About',
           component: About
       },
       {
           path: '/articel',
           name: 'Articel',
           component: Articel
       }

    ],
    linkExactActiveClass: "active"
})

export default router
