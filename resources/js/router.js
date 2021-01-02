import Vue from 'vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import axios from 'axios'
import VueSweetalert2 from 'vue-sweetalert2'

import Home from './views/Home.vue'
import About from './views/About.vue'
import Articel from './views/Articel.vue'
import ArticelIndex from './views/ArticelIndex.vue'
import ArticelCreate from './views/ArticelCreate.vue'
import ArticelShow from './views/ArticelShow.vue'
import ArticelEdit from './views/ArticelEdit.vue'

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
       },
       {
           path: '/articel/index',
           name: 'ArticelIndex',
           component: ArticelIndex
       },
       {
           path: '/articel/create',
           name: 'ArticelCreate',
           component: ArticelCreate
       },
       {
           path: '/articel/show/:id',
           name: 'ArticelShow',
           component: ArticelShow
       },
       {
        path: '/articel/edit/:id',
        name: 'ArticelEdit',
        component: ArticelEdit
        }

    ],
    linkExactActiveClass: "active"
})

export default router
