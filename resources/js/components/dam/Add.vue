<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h4>Register New Dam</h4>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            


                            <div class="col-md-8">
                                <form autocomplete="off" @submit.prevent="save">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="kode_bendungan">Kode Bendungan</label>
                                                <input type="text" name="kode_bendungan" id="kode_bendungan" v-model="form.kode_bendungan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="kode_bendungan"><span style="color: red"><strong>*)</strong></span> Nama Bendungan</label>
                                                <input type="text" name="nama" id="nama" v-model="form.nama" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="ip_address">IP Address</label>
                                                <input type="text" class="form-control ip" data-mask="999.999.999.999">
                                                <input type="text" v-model="form.ip_address" name="ip_address" class="form-control ip" data-inputmask="'alias': 'ip'">
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
    

        title: 'Register New DAM',
        data: () => ({
            form: {
                kode_bendungan: '',
                nama: '',
                ip_address: '',
                keterangan: '',
                alamat: '',
                latitude: '',
                longitude: ''
            },
        }),

        mounted() {
            // this.getDam()
            
        },
        
        watch: {
            // whenever question changes, this function will run
            title: function () {
                if(this.title == 'asu')
                {
                    alert('santai woy')
                }
                console.log('Changed: ' + this.title);
            }
        },

        methods: {
            save()
            {
                let vm = this;
                
                axios.post('/site_dam/register', vm.form)
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