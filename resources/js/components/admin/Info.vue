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
                                                <label for="nama_sistem">Nama Sistem</label>
                                                <input type="text" v-model="info.nama_sistem" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="target_bendungan"><span style="color: red"><strong>*)</strong></span> Target Bendungan</label>
                                                <input type="number" class="form-control" v-model="info.target_bendungan">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ip_address">IP Address</label>
                                                <input type="text" v-model="info.host" class="form-control">
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

                swal({
                    title: "Apakah Anda ingin mengupdate Informasi Sistem?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((save) => {
                    if (save) {
                        axios.post('/api/save_info', vm.info)
                        .then(res => {
                            var data = res.data
                            console.log(data);

                            if(data.status == 'success')
                            {
                                vm.$store.commit('setInfo', data.data)
                                toastr.success('Success', data.message)
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                    } else {
                        toastr.info('You cancelled updating')
                        // swal("Your imaginary file is safe!");
                    }
                });
                
                
            }
        }
    } 
</script>