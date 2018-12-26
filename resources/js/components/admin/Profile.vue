<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h5>Setting Sistem</h5>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-8">
                                <form autocomplete="off" @submit.prevent="save">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" v-model="user.username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" v-model="user.name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">E-Mail</label>
                                                <input type="text" v-model="user.email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="target_bendungan"><span style="color: red"><strong>*)</strong></span> Target Bendungan</label>
                                                <input type="number" class="form-control" v-model="user.name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ip_address">IP Address</label>
                                                <input type="text" v-model="user.name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-warning background-warning">
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-bubble-right"></i> Form isian dengan tanda <span style="color: red"><strong>*)</strong></span> Wajib diisi
                                        </li>
                                        <li>
                                            <i class="icofont icofont-bubble-right"></i> Consectetur adipiscing elit
                                        </li>
                                        <li>
                                            <i class="icofont icofont-bubble-right"></i> Integer molestie lorem at massa
                                        </li>
                                    </ul>

                                </div>
                                <button type="button" @click.prevent="save" class="btn btn-block"><i class="fa fa-key"></i> Ganti Password</button>
                                <button type="button" @click.prevent="save" class="btn btn-block btn-primary"><i class="fa fa-check"></i> Register</button>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    // import { DataTables, DataTablesServer } from 'vue-data-tables'
    // Vue.use(DataTables);

    export default {
        title: 'Profil',

        mounted() {
            this.getUser()
        },

        data(){
            return {
                user: [],
            }
        },

        methods: {
            getUser()
            {
                let vm = this

                axios.get('/api/auth/user')
                .then(res => {
                    var data = res.data.data
                    vm.user = data
                })
            },

            save()
            {
                alert('Save button clicked')
            }
        }
    }
</script>
