import Vue from 'vue';

import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
// import NProgress from 'vue-nprogress'

import configRouter from './router';
import titleMixin from './titleMixin';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(NProgress);
Vue.mixin(titleMixin);

Vue.component('menu-admin', require('./components/admin/Menu.vue'))
Vue.component('page-loader', require('./components/page/Loader.vue'))

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

axios.defaults.baseURL = 'http://localhost:8000/api/';

const router = new VueRouter({
    mode: 'history',
    routes: configRouter,
});

router.beforeResolve((to, from, next) => {
    if(to.path) {
        NProgress.start()
    }
    next()
});


router.afterEach((to, from, next) => {
    NProgress.done()
});


Vue.router = router

const app = new Vue({
    el: '#app',
    data: {
    },
    router,
    axios
});
