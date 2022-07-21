require('./bootstrap');
import Vue from 'vue/dist/vue.esm.js';
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';

import axios from 'axios';
Vue.use(VueAxios, axios);

let routes = [
    { path: '/profile', component: require('./components/profile.vue').default },
];



const router = new VueRouter({
    mode: 'history',
       routes
});

const app = new Vue({
    el: '#app',
    router
});