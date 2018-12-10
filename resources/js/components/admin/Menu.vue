<template>

    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">

            <div class="pcoded-navigatio-lavel">Navigation</div>

            <ul class="pcoded-item pcoded-left-item">
                <li class="" :class="{'active' : subIsActive('/dashboard')}">
                    <router-link to="/dashboard">
                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                            <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/map_view')}">
                    <router-link to="map_view">
                        <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Map View</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/login')}">
                    <router-link to="login">
                        <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Login</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>

                <li class="" :class="{'active' : subIsActive('/register')}">
                    <router-link to="register">
                        <span class="pcoded-micon"><i class="ti-map-alt"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">Register</span>
                        <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>
            </ul>

            <div class="pcoded-navigatio-lavel">Master Data</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="" :class="{'active' : subIsActive('/datadam')}">
                    <router-link to="/datadam">
                            <span class="pcoded-micon"><i class="ti-server"></i></span>
                            <span class="pcoded-mtext">DAM Management</span>
                            <span class="pcoded-mcaret"></span>
                    </router-link>
                </li>
                <li class="pcoded-hasmenu pcoded-trigger" dropdown-icon="style1" subitem-icon="style6">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.user-profile.main">User Profile</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu open">
                        <li class="active">
                            <a href="timeline.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline">Timeline</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="timeline-social.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline-social">Timeline Social</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="user-profile.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.user-profile.user-profile">User Profile</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="user-card.html">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">User Card</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
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
