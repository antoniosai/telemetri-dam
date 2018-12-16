
//Auth
import Login from './components/auth/Login'
import Register from './components/auth/Register'

import DataDam from './components/dam/Data'
import RegisterDam from './components/dam/Add'
import DetailDam from './components/dam/Detail'
import EditDam from './components/dam/Edit'

import Monitor from './components/monitor/Index'

import AdminDashboard from './components/admin/Dashboard'
import Info from './components/admin/Info'
import MapView from './components/MapView'

export default [
    {
        path: '/dashboard',
        name: 'admin',
        component: AdminDashboard,
        meta: {
            auth: {roles: 'admin', redirect: '/login'}
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
        path: '/dam/edit/:id',
        props: true,
        name: 'dam.edit',
        component: EditDam,
        meta: {
            auth: true,

        }
    },
    {
        path: '/dam/detail/:id',
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
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    }
];
