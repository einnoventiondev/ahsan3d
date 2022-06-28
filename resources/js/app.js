require('./bootstrap');

import Vue from 'vue/dist/vue'
window.Vue = require('vue');
import axios from 'axios'
axios.create({
    baseURL: process.env.appUrl
});

Vue.component('chat-component', require('./components/ChatComponent.vue').default);

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)
const VarUploadComponent = require('vue-upload-component')
Vue.component('file-upload',VarUploadComponent)

const app = new Vue({
    el: '#app',
});