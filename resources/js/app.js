/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');
// window.bootstrap = require('./bootstrap');
window.Vue = require('vue').default;
// Vue.use(PortalVue);
// window.PortalVue =require ('portal-vue');
window.moment = require('moment');
window.moment.locale('ru');
// window.BootsrapVue = require('bootstrap-vue');



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('carousel-component', require('./components/CarouselComponent.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-counter', require('./components/TestCounter.vue').default);
Vue.component('test-score', require('./components/TestScore.vue').default);
Vue.component('test-game', require('./components/TestGame.vue').default);
Vue.component('questions-list', require('./components/QuestionsList.vue').default);
Vue.component('question-lonely', require('./components/QuestionLonely.vue').default);
Vue.component('test-create', require('./components/TestCreate.vue').default);
Vue.component('types-test', require('./components/TypesTest.vue').default);
Vue.component('question-create', require('./components/QuestionCreate.vue').default);
Vue.component('answers-create', require('./components/QuestionCreate.vue').default);
Vue.component('modal-component', require('./components/ModalComponent.vue').default);
Vue.component('posts-component', require('./components/PostsComponent.vue').default);
Vue.component('card-component', require('./components/CardComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
const axios = require('axios').default;
