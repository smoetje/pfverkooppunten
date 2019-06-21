/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import VerkooppuntenIndex from './components/verkooppunten/index.vue';
import VerkooppuntenCreate from './components/verkooppunten/create.vue';
import VerkooppuntenEdit from './components/verkooppunten/edit.vue';

const routes = [
  {
    path: '/',
    component: VerkooppuntenIndex,
    name: 'indexVerkooppunt'
  },
  {
    path: '/edit/:id',
    component: VerkooppuntenEdit,
    name: 'editVerkooppunt'
  },
  {
    path: '/create',
    component: VerkooppuntenCreate,
    name: 'createVerkooppunt'
  }
];

const router = new VueRouter({routes});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const application = new Vue({
    el: '#app',
    router
});

// const sheetapp = new Vue({router}).$mount('#app')
