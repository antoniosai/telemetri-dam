import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import * as VueGoogleMaps from "vue2-google-maps";

import {ServerTable, ClientTable, Event} from 'vue-tables-2';
import titleMixin from './titleMixin';
import configRouter from './router';

Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyCri8tW6KLNE2wL5KsfHrjWrXZ2iqMnlLM",
        libraries: "places" // necessary for places input
    }
});

//AIzaSyCi8goOB4zl7bK9BV3-uS-Lnc3NyowAEH0
Vue.use(ClientTable, {}, false, 'bootstrap4');

Vue.mixin(titleMixin);
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
window.axios = axios;

axios.defaults.baseURL = 'http://localhost:8000/api';

Vue.component('menu-admin', require('./components/admin/Menu.vue'))

//Page Layout
Vue.component('navigation-bar', require('./components/page/NavigationBar.vue'))
Vue.component('main-app', require('./components/page/App.vue'))

const router = new VueRouter({
    routes: configRouter
});

Vue.router = router

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
})

router.beforeResolve((to, from, next) => {
    if(to.path) {
        NProgress.start()
    }
    next()
});


router.afterEach((to, from, next) => {
    NProgress.done()
});

const app = new Vue({
    el: '#app',

    data: {
    	info: []
    },

    methods: {
		getInfo: function() {
    		var app = this;

			axios.get('/get_info')
			.then(function (response) {

				var info = response.data;

				app.info = info;
			})
    	}
    },

    mounted: function() {
    	this.getInfo();
    },
    router,
    axios
});
