<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h4>Edit Sistem Telemetri Dam</h4>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-8">
                                <form autocomplete="off" @submit.prevent="save">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_sistem">Kode Bendungan</label>
                                                <input type="text" name="nama_sistem" id="nama_sistem" v-bind:value="$store.state.info.nama_sistem" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_sistem"><span style="color: red"><strong>*)</strong></span> Nama Bendungan</label>
                                                <input type="text" name="nama" id="nama" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ip_address">IP Address</label>
                                                <input type="text" class="form-control ip" data-mask="999.999.999.999">
                                                <input type="text" name="ip_address" class="form-control ip" data-inputmask="'alias': 'ip'">
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

    // Initialize InputMask
    // $(":input").inputmask();

    export default {
    

        title: 'Setting Informasi Sistem',
        data: () => ({
            info: [],
        }),

        mounted() {
            this.getInfo()
            
        },
        
        watch: {
            // whenever question changes, this function will run
            
        },

        methods: {

            getInfo() {
                var vm = this

                vm.info = vm.$store.getters.info;
                // console.log(vm.info);
            },

            save()
            {
                let vm = this;
                
                axios.post('/api/save_info', vm.info)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    } 
</script>