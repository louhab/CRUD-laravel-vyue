

require('./bootstrap');

window.Vue = require('vue').default;
import User from './helpers/User.js';
window.User=User;


import Produit from './components/Produit.vue';
import Home from './components/Home.vue';

Vue.component('incription', require('./components/Inscrption.vue').default);
Vue.component('coonexion', require('./components/Login.vue').default);
Vue.component('Home', require('./components/Home.vue').default);
Vue.component('produit', require('./components/Produit.vue').default);
Vue.component('add-produit', require('./components/Addproduit.vue').default);
Vue.component('edit-produit', require('./components/EditProdit.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router' ;
Vue.use(VueRouter);



const routes =[
    {
        path : '/Produitkamlin', 
        component  : Produit ,
        name : 'Produit'
    },
    {
        path : '/home', 
        component  :Home  ,
        name : 'Home'
    }
    
];
const router = new VueRouter({
    routes,
    hashbang:false,
    mode:'history'
})

const app = new Vue({
    el: '#app',
    router
   
});
