import './bootstrap';
import Alpine from 'alpinejs';
import Vue from 'vue';
import CarrerasComponent from './components/CarrerasComponent.vue';

window.Alpine = Alpine;
Alpine.start();

Vue.component('carreras-component', CarrerasComponent);

const app = new Vue({
    el: '#app',
});