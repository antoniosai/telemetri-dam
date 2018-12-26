//Library
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import * as VueGoogleMaps from "vue2-google-maps"
import vSelect from 'vue-select'

//Config
import store from './store'
import titleMixin from './titleMixin'
import router from './router'
import base_url from './base_url'
import gmaps_config from './gmaps_config'

Vue.mixin(titleMixin);
Vue.use(VueAxios, axios);

Vue.use(VueGoogleMaps, gmaps_config);

axios.defaults.baseURL = base_url;
window.axios = axios;

//Page Layout
Vue.component('menu-admin', require('./components/admin/Menu.vue'))
Vue.component('navigation-bar', require('./components/page/NavigationBar.vue'))
Vue.component('main-app', require('./components/page/App.vue'))

Vue.component('v-select', vSelect)

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
})

const app = new Vue({
    el: '#app',

    data: {},

    methods: {},

    mounted: function() {
        store.dispatch('getInfo')
        // this.$auth.logout()
    },
    router, axios, store,
});
