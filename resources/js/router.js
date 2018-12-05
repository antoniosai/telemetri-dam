
import DataDam from './components/dam/Data'
import AdminDashboard from './components/admin/Dashboard'
import MapView from './components/MapView'

export default [
    {
        path: '/datadam',
        name: 'datadam',
        component: DataDam,
        meta: {title: 'Data DAM'}
    },
    {
        path: '/dashboard',
        name: 'admin',
        component: AdminDashboard,
        meta: {title: 'Dashboard'}
    },
    {
        path: '/map_view',
        name: 'map_view',
        component: MapView,
        meta: {title: 'Map View'}
    }
];
