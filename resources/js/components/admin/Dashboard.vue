<template>
    <div class="row h-full" data-plugin="matchHeight">
        <div class="col-md-3">
            <div class="card client-blocks dark-primary-border">
                <div class="card-block">
                    <h5><router-link :to="{name:'datadam'}">Connected DAM</router-link></h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-database"></i>
                        </li>
                        <li class="text-right">
                            <small>133/<small>211</small></small>
                        </li>
                    </ul>
                    <br/>
                    <router-link class="btn btn-sm btn-primary btn-block" :to="{name:'datadam'}">See More</router-link>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card client-blocks warning-border">
                <div class="card-block">
                    <h5>User Registered</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-user"></i>
                        </li>
                        <li class="text-right">
                            23
                        </li>
                    </ul>
                    <br/>
                    <router-link class="btn btn-sm btn-warning btn-block" :to="{name:'datadam'}">See More</router-link>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card client-blocks success-border">
                <div class="card-block">
                    <h5>New Files</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-files"></i>
                        </li>
                        <li class="text-right">
                            240
                        </li>
                    </ul>

                    <br/>
                    <router-link class="btn btn-sm btn-success btn-block" :to="{name:'datadam'}">See More</router-link>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card client-blocks danger-border">
                <div class="card-block">
                    <h5>User Registered</h5>
                    <ul>
                        <li>
                            <i class="icofont icofont-user"></i>
                        </li>
                        <li class="text-right">
                            23
                        </li>
                    </ul>
                    <br/>
                    <router-link class="btn btn-sm btn-danger btn-block" :to="{name:'datadam'}">See More</router-link>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    // import { DataTables, DataTablesServer } from 'vue-data-tables'
    // Vue.use(DataTables);

    export default {
        title: 'Dashboard',
        data(){
            return {
                cruds: [],
                title: 'Test'
            }
        },

        mounted() {
        }
    }
</script>
