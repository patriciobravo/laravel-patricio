
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var Vue = require('vue');
Vue.use(require('vue-resource'));

import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-dt/css/jquery.dataTables.css';


//----------------------datatable----------------------

import 'datatables.net-buttons/js/buttons.colVis.js';
import 'datatables.net-buttons/js/buttons.html5.js';
import 'datatables.net-buttons/js/buttons.flash.js';
import 'datatables.net-buttons/js/buttons.print.js';

import 'datatables.net-buttons-dt/css/buttons.dataTables.css';
import 'datatables.net-buttons-dt/css/buttons.dataTables.min.css';
import 'jquery-ui/ui/widgets/autocomplete';
import 'jquery-ui/themes/base/core.css';
import 'jquery-ui/themes/base/autocomplete.css';
import 'jquery-ui/themes/base/theme.css';
import 'jquery-ui/themes/base/menu.css';
import 'jquery-ui/ui/widgets/datepicker';
import 'jquery-ui/themes/base/datepicker.css';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));


const app = new Vue({
    el: '#viaje'
});

Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

//Vue.component('viajes', require('./components/Viajes.vue'));
/*
import customer from './components/Viajes.vue';

const app = new Vue({
    el: '#viaje',
    components: { customer }
});*/
