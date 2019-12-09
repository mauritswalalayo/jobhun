
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web mobilelications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
import store from './store.js';
import VueSwal from 'vue-swal';
import VModal from 'vue-js-modal';
import routes from './routes.js';
import VueRouter from 'vue-router';

Vue.use(VueSwal);
Vue.use(VModal);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.use(VueRouter)
const router = new VueRouter({
    routes: routes
})

import interceptorsSetup from './interceptors'
interceptorsSetup();

//============================== untuk mobile =========================================================
// Partial
Vue.component('topbar-component', require('./components/mobile/partial/topbar.vue').default);
Vue.component('sidebar-component', require('./components/mobile/partial/sidebar.vue').default);
Vue.component('footer-component', require('./components/mobile/partial/footer.vue').default);


//============================= untuk web=========================================================
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('loading-component', require('./components/Loading.vue').default);

// Mendeklarasikan tag user table
Vue.component('back-user-table', require('./components/back/user/Table.vue').default);

// Mendeklarasikan tag search careerhub
Vue.component('front-careerhub', require('./components/front/careerhub.vue').default);

// Mendeklarasikan Posting Career Hub
Vue.component('front-posting-careerhub', require('./components/front/postingcareerhub.vue').default);

// Mendeklarasikan Bagian Back Post
Vue.component('back-post-table', require('./components/back/post/Table.vue').default);

// Mendeklarasikan Bagian Back Tag
Vue.component('back-tag-table', require('./components/back/tag/Table.vue').default);

// Mendeklarasikan Bagian Back Testimoni
Vue.component('back-testimoni-table', require('./components/back/testimoni/Table.vue').default);

// Mendeklarasikan Bagian Back Testimoni
//Vue.component('back-testimoni-form', require('./components/back/testimoni/Form.vue').default);

// Mendeklarasikan Bagian Back Tag
Vue.component('back-collaborate-table', require('./components/back/collaborate/Table.vue').default);

// Mendeklarasikan Bagian Back Jobhun Academy
Vue.component('back-jobhunacademy-table', require('./components/back/jobhunacademy/Table.vue').default);

// Mendeklarasikan Bagian Back Form Carrer Hub Premium
Vue.component('back-jobhunacademy-table', require('./components/back/jobhunacademy/Table.vue').default);

const mobile = new Vue({
    store,
    router,
    el: '#app'
});


