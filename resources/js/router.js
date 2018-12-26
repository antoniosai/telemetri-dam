import Vue from 'vue'
import Router from 'vue-router'


//Auth
import Login from './components/auth/Login'
import Register from './components/auth/Register'

//Dam
import DataDam from './components/dam/Data'
import RegisterDam from './components/dam/Add'
import DetailDam from './components/dam/Detail'
import EditDam from './components/dam/Edit'

//User
import DataUser from './components/admin/user/Data'
import AddUser from './components/admin/user/Add'
import DetailUser from './components/admin/user/Detail'
import EditUser from './components/admin/user/Edit'


import Monitor from './components/monitor/Index'

import AdminDashboard from './components/admin/Dashboard'
import Profile from './components/admin/Profile'
import Info from './components/admin/Info'
import MapView from './components/MapView'

Vue.use(Router)

let router = new Router({
    routes: [
        {
            path: '/dashboard',
            name: 'admin',
            component: AdminDashboard,
            meta: {
                auth: true
            }
        },
    
        //SetInfo
    
        {
            path: '/set_info',
            name: 'info',
            component: Info,
            meta: {
                auth: true
            }
        },
    
    
        //Monitor
        {
            path: '/monitor',
            name: 'monitor',
            component: Monitor,
            meta: {
                auth: true
            }
        },
        //Dam
        {
            path: '/datadam',
            name: 'datadam',
            component: DataDam,
            meta: {
                auth: true
            }
        },
        {
            path: '/datadam/edit/:id',
            props: true,
            name: 'dam.edit',
            component: EditDam,
            meta: {
                auth: true,
    
            }
        },
        {
            path: '/datadam/detail/:id',
            props: true,
            name: 'dam.detail',
            component: DetailDam,
            meta: {
                auth: true,
    
            }
        },
        {
            path: '/datadam/register',
            name: 'dam.register',
            component: RegisterDam,
            meta: {
                auth: true
            }
        },
    
        //User
        {
            path: '/user_management/',
            name: 'user.data',
            component: DataUser,
            meta: {
                auth: true
            }
        },
        {
            path: '/user_management/add',
            name: 'user.add',
            component: AddUser,
            meta: {
                auth: true
            }
        },
        {
            path: '/user_management/detail/:id',
            name: 'user.detail',
            component: DetailUser,
            meta: {
                auth: true
            }
        },
        {
            path: '/user_management/edit/:id',
            name: 'user.edit',
            component: EditUser,
            meta: {
                auth: true
            }
        },
        {
            path: '/map_view',
            name: 'map_view',
            component: MapView,
            meta: {
                auth: true
            }
        },
    
        //Auth
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/user/profile',
            name: 'user_profile',
            component: Profile
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        }

    ]
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

Vue.router = router

export default router