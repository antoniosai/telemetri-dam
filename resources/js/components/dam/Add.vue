<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h4>Register Dam {{ form.text }}</h4>
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
                                                <label for="nama"><span style="color: red"><strong>*)</strong></span> Nama Bendungan</label>
                                                <input type="text" name="nama" id="nama" v-model="form.nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="provinsi">Pilih Provinsi</label>
                                                
                                                <v-select :options="prov" v-model="selected_prov"></v-select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" v-if="this.kota.length != 0">
                                            <div class="form-group">
                                                <label for="provinsi">Pilih Kota</label>
                                                <v-select :options="kota" v-model="selected_kota"></v-select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" v-if="this.kec.length != 0">
                                            <div class="form-group">
                                                <label for="kecamatan">Pilih Kecamatan</label>
                                                <v-select :options="kec" v-model="selected_kec"></v-select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" v-if="this.desa.length != 0">
                                            <div class="form-group">
                                                <label for="desa">Pilih Desa</label>
                                                <v-select :options="desa" v-model="selected_desa"></v-select>
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

            selected_prov: '',
            selected_kota: '',
            selected_kec: '',
            selected_desa: '',
            prov: [],
            kota: [],
            kec: [],
            desa: [],
            form: {
                'nama': '',
                'kode_bendungan': '',
                'latitude': '',
                'longitude': '',
                'alamat': '',
                'keterangan': '',
                'provinsi_id': '',
                'kota_id': '',
                'kecamatan_id': '',
                'desa_id': ''
            },
        }),

        mounted() {
            this.getProvinsi()
        },
        
        watch: {
            selected_prov: function()
            {
                let vm = this
                var url = '/api/wilayah/kota/'+vm.selected_prov['value']

                vm.form.provinsi_id = vm.selected_prov['value']
                vm.kota = []
                vm.kec = []
                vm.desa = []

                axios.get(url)
                .then(res => {
                    vm.kota = res.data
                })
            },
            selected_kota: function()
            {
                let vm = this

                vm.desa = []

                vm.form.kota_id = vm.selected_kota['value']

                var url = '/api/wilayah/kecamatan/'+this.selected_kota['value']
                axios.get(url)
                .then(res => {
                    vm.kec = res.data
                })
            },
            selected_kec: function()
            {
                let vm = this

                vm.form.kecamatan_id = vm.selected_kec['value']
                var url = '/api/wilayah/desa/'+this.selected_kec['value']
                axios.get(url)
                .then(res => {
                    vm.desa = res.data
                    console.log(vm.desa)
                })
            },
            selected_desa: function()
            {
                let vm = this
                vm.form.desa_id = vm.selected_desa['value']
            }
        },

        methods: {

            getProvinsi()
            {
                let vm = this
                axios.get('/api/wilayah/provinsi')
                .then(res => {
                    var data = res.data
                    vm.prov = data

                })
            },
            
            save()
            {
                let vm = this;

                swal({
                    title: "Are you sure?",
                    text: "of changing " + vm.form.text + " Dam data",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((save) => {
                    if (save) {
                        axios.post('/api/dam/save', vm.form)
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
                        toastr.info('Membatalkan Register DAM')
                        // swal("Your imaginary file is safe!");
                    }
                });
                
            }
        }
    } 
</script>