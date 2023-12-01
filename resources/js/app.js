import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import route from "./UI/route";
import MainEntry from "./UI/MainEntry.vue"
import 'bootstrap/dist/css/bootstrap-grid.min.css'
import 'bootstrap/dist/css/bootstrap-utilities.min.css'
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/reset.css';
import { createPinia } from 'pinia'
import axios from 'axios';

axios.defaults.withCredentials = true
axios.defaults.baseURL = 'http://127.0.0.1:8001/api'
axios.interceptors.response.use(reponse =>{
    console.log('xxx', reponse);
    return reponse;
    
}, error =>{
    console.log("errors")
})
const pinia = createPinia()
const app = createApp({});
app.component('main-entry', MainEntry).use(route).use(Antd).use(pinia);
app.mount('#app')