require('./bootstrap');

window.Vue = require('vue').default;

import vuetify from './vuetify';


 Vue.component('table-component', require('./components/table-component.vue').default);
 const app = new Vue({
   el: '#app',
   vuetify
 });