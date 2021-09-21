/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
require('./bootstrap');
window.Vue = require('vue').default;
window.moment = require('moment');
window.moment.locale('ru');
import router from './routes';

Vue.component('carousel-component', require('./components/CarouselComponent.vue').default);
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
Vue.component('service-component', require('./components/ServiceComponent.vue').default);
Vue.component('answers-list', require('./components/AnswersList.vue').default);
Vue.component('lone-answer', require('./components/LoneAnswer.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 new Vue({
    el: '#app',

    router:router
});

const axios = require('axios').default;
