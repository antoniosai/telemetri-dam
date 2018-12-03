
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

//View
import DataDam from './components/dam/Data'
import AdminDashboard from './components/admin/Dashboard'

//Menu Admin
// import MenuAdmin from './components/admin/Menu'

Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('data-dam', require('./components/dam/Data.vue'));

//Menu Admin
Vue.component('menu-admin', require('./components/admin/Menu.vue'));


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/datadam',
            name: 'datadam',
            component: DataDam,
            meta: {title: 'Data DAM'}
        },
        {
            path: '/dashboard',
            name: 'admin',
            component: AdminDashboard,
            meta: {title: 'Dashboard'}
        }
    ],
});
const app = new Vue({
    el: '#app',
    router
});
