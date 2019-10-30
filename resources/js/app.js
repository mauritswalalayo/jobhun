
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
import store from './store.js';
import VueSwal from 'vue-swal'
 
Vue.use(VueSwal);
Vue.component('pagination', require('laravel-vue-pagination'));

import interceptorsSetup from './interceptors'
interceptorsSetup();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('loading-component', require('./components/Loading.vue').default);

// Mendeklarasikan tag user table
Vue.component('back-user-table', require('./components/back/user/Table.vue').default);

// Mendeklarasikan tag search careerhub
Vue.component('front-careerhub', require('./components/front/careerhub.vue').default);

// Mendeklarasikan Posting Career Hub
Vue.component('front-posting-careerhub', require('./components/front/postingcareerhub.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
	store,
    el: '#app'
});
