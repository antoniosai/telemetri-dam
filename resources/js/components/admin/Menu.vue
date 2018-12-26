<template>

    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            <div class="pcoded-navigatio-lavel">Navigation</div>

            <ul class="pcoded-item pcoded-left-item">
                <li class="" :class="{'active' : subIsActive('/dashboard')}" v-if="$auth.check()" >
                    <router-link :to="{ name: 'admin' }">
                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/set_info')}" v-if="$auth.check()" >
                    <router-link :to="{ name: 'info' }">
                        <span class="pcoded-micon"><i class="ti-settings"></i></span>
                        <span class="pcoded-mtext">Setting Sistem</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/map_view')}" v-if="$auth.check()" >
                    <router-link :to="{ name: 'map_view' }">
                        <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Map View</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/monitor')}" v-if="$auth.check()" >
                    <router-link :to="{ name: 'monitor' }">
                        <span class="pcoded-micon"><i class="ti-desktop"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Monitoring</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/login')}" v-if="!$auth.check()" >
                    <router-link :to="{ name: 'login' }">
                        <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Login</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/register')}" v-if="!$auth.check()" >
                    <router-link :to="{ name: 'register' }">
                        <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Register</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>
            </ul>

            <div class="pcoded-navigatio-lavel">Master Data</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="" :class="{'active' : subIsActive('/datadam')}" v-if="$auth.check()" >
                    <router-link :to="{ name: 'datadam' }">
                            <span class="pcoded-micon"><i class="ti-server"></i></span>
                            <span class="pcoded-mtext">DAM Management</span>
                            <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>
                <li class="" :class="{'active' : subIsActive('/user_management')}" v-if="$auth.check()" >
                    <router-link :to="{ name: 'user.data' }">
                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                        <span class="pcoded-mtext">User Management</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>
            </ul>

        </div>
    </nav>


</template>

<script>
    export default {
        mounted() {
        },

        methods: {
        subIsActive(input) {
            const paths = Array.isArray(input) ? input : [input]
                return paths.some(path => {
                return this.$route.path.indexOf(path) === 0 // current path starts with this path string
                })
            }
        }
    }
</script>
