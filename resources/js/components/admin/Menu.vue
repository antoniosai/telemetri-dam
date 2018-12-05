<template>
    <ul class="site-menu" data-plugin="menu">
        <li class="site-menu-category">General</li>

        <li class="site-menu-item" :class="{'active' : subIsActive('/dashboard')}">
            
            <router-link to="/dashboard">
                <a>
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                </a>
            </router-link>
            
        </li>
        
        <li class="site-menu-item" :class="{'active' : subIsActive('/map_view')}">
            
            <router-link to="/map_view">
                <a>
                    <i class="site-menu-icon fa fa-map" aria-hidden="true"></i>
                    <span class="site-menu-title">Full Map View</span>
                </a>
            </router-link>
            
        </li>

        <li class="site-menu-category">Master Data</li>

        <li class="site-menu-item" :class="{'active' : subIsActive('/datadam')}">
            
            <router-link to="/datadam">
                <a>
                    <i class="site-menu-icon fa fa-map" aria-hidden="true"></i>
                    <span class="site-menu-title">DATA DAM</span>

                </a>
            </router-link>
        </li>

        <li class="site-menu-item has-sub">

            <a href="index.html">
                <i class="site-menu-icon fa fa-users" aria-hidden="true"></i>
                <span class="site-menu-title">User Management</span>
            </a>
            
        </li>

        <li class="site-menu-item has-sub">

            <a href="index.html">
                <i class="site-menu-icon fa fa-wrench" aria-hidden="true"></i>
                <span class="site-menu-title">Setting</span>
            </a>
            
        </li>

        <li class="site-menu-category">Help Desk</li>

        <li class="site-menu-item">

            <a href="/">
                <i class="site-menu-icon fa fa-cog" aria-hidden="true"></i>
                <span class="site-menu-title">Technical Support</span>
            </a>
            
        </li>

        <li class="site-menu-item">

            <a href="/">
                <i class="site-menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="site-menu-title">Manual</span>
            </a>
            
        </li>

    </ul>

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
