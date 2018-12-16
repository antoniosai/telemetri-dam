<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h4>Edit Dam {{ form.nama }}</h4>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-8">
                                <form autocomplete="off" @submit.prevent="save">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="token">Token DAM {{ form.nama }}</label>
                                                <input type="text" name="token" id="token" v-model="form.token" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="kode_bendungan">Kode Bendungan</label>
                                                <input type="text" name="kode_bendungan" id="kode_bendungan" v-model="form.kode_bendungan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama"><span style="color: red"><strong>*)</strong></span> Nama Bendungan</label>
                                                <input type="text" name="nama" id="nama" v-model="form.nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control" v-model="form.alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea name="keterangan" id="keterangan" cols="30" rows="4" class="form-control" v-model="form.keterangan"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="latitude">Latitude</label>
                                                <input type="text" name="latitude" id="latitude" v-model="form.latitude" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="longitude">Longitude</label>
                                                <input type="text" name="longitude" id="longitude" v-model="form.longitude" class="form-control">
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

                                <button type="button" @click.prevent="generateToken" class="btn btn-block btn-info btn-outline-info"><i class="fa fa-key"></i> Generate New Token</button>
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

        props: ['id'],

        title: 'Edit DAM',
        data: () => ({
            form: [],
        }),

        mounted() {
            this.getDam()
            
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
            getDam()
            {
                let vm = this;
                
                axios.get('/dam/detail/'+this.id)
                .then(function (res) {
                    var data = res.data;
                    vm.form = data
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            generateToken()
            {
                var vm = this

                swal({
                    title: "Are you sure?",
                    text: "Generate new token code will make " + vm.form.nama + " Dam disconnected",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((generate) => {
                    if (generate) {
                        axios.get('/generate_token')
                        .then(function(res){
                            // console.log(res.data);
                            vm.form.token = res.data
                            toastr.success('New token generated')
                        });
                    } else {
                        toastr.info('You cancelled Generating new token')
                        // swal("Your imaginary file is safe!");
                    }
                });
                
            },
            save()
            {
                let vm = this;

                swal({
                    title: "Are you sure?",
                    text: "of changing " + vm.form.nama + " Dam data",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((save) => {
                    if (save) {
                        axios.post('/dam/save', vm.form)
                        .then(function (res) {
                            if(res.data.status == 'success')
                            {
                                toastr.success(res.data.message)
                                vm.$router.push('/datadam');
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                    } else {
                        toastr.info('You cancelled Generating new token')
                        // swal("Your imaginary file is safe!");
                    }
                });
                
                
                
            }
        }
    } 
</script>