
//Auth
import Login from './components/auth/Login'
import Register from './components/auth/Register'

import DataDam from './components/dam/Data'
import AdminDashboard from './components/admin/Dashboard'
import MapView from './components/MapView'

export default [
    {
        path: '/datadam',
        name: 'datadam',
        component: DataDam,
        meta: {
            auth: false
        }
    },
    {
        path: '/dashboard',
        name: 'admin',
        component: AdminDashboard,
        meta: {
            auth: false
        }
    },
    {
        path: '/map_view',
        name: 'map_view',
        component: MapView,
        meta: {
            auth: false
        }
    },

    //Auth
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    }
];
