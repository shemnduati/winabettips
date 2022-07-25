require('./bootstrap');
import Vue from 'vue/dist/vue.esm.js';
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';

import axios from 'axios';
Vue.use(VueAxios, axios);
import Form  from 'vform';

import Pagination from 'vue-pagination-2';
Vue.component('pagination', Pagination);

//sweetalert
import Swal from 'sweetalert2';
window.Swal = Swal;
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Form = Form;

let routes = [
    { path: '/profile', component: require('./components/profile.vue').default },
    { path: '/users', component: require('./components/users.vue').default },
    { path: '/games', component: require('./components/games.vue').default },
    { path: '/predictions', component: require('./components/prediction.vue').default },
];



const router = new VueRouter({
    mode: 'history',
       routes
});

const app = new Vue({
    el: '#app',
    router
});