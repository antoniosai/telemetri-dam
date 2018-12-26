<template>
    <div class="container">
        <h3 class="card-title">Waduk {{ dam.nama }}</h3>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#main_info" role="tab" aria-expanded="true">Informasi Bendungan</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#map_view" role="tab" aria-expanded="false">Peta Lokasi</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages3" role="tab" aria-expanded="false">Messages</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Settings</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="main_info" role="tabpanel" aria-expanded="true">

                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr class="bg-info">
                                            <td colspan="3">
                                                <center><h5 style="text-color: white">Health Status</h5></center>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 180px">Health Status</td>
                                            <td style="width: 30px">:</td>
                                            <td><span class="badge badge-success">Good</span></td>
                                        </tr>
                                        <tr>
                                            <td>Last Response</td>
                                            <td>:</td>
                                            <td>19 Desember 2018</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-hover table-sm table-striped">
                                    <thead>
                                        <tr class="bg-info">
                                            <td colspan="3">
                                                <center><h5 style="text-color: white">Informasi Bendungan</h5></center>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td style="width: 180px">Nama Bendungan</td>
                                            <td style="width: 30px">:</td>
                                            <td>{{ dam.nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kode Bendungan</td>
                                            <td>:</td>
                                            <td>{{ dam.kode_bendungan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Desa/Kelurahan</td>
                                            <td>:</td>
                                            <td>{{ dam.desa }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td>:</td>
                                            <td>{{ dam.kecamatan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kabupaten/Kota</td>
                                            <td>:</td>
                                            <td>{{ dam.kota }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi</td>
                                            <td>:</td>
                                            <td>{{ dam.provinsi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Latitude</td>
                                            <td>:</td>
                                            <td>{{ dam.latitude }}</td>
                                        </tr>
                                        <tr>
                                            <td>Longitude</td>
                                            <td>:</td>
                                            <td>{{ dam.longitude }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="map_view" role="tabpanel" aria-expanded="false">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.092910697984!2d110.9196703142099!3d-6.758524167966169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d066644f3671%3A0x5a2fdbec08f39d33!2sWaduk+Logung!5e0!3m2!1sid!2sid!4v1545211754421" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane" id="messages3" role="tabpanel" aria-expanded="false">
                                <p class="m-0">3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin
                                    gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit
                                    consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
                            </div>
                            <div class="tab-pane" id="settings3" role="tabpanel">
                                <p class="m-0">4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit
                                    amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            
        </div>

        <!-- Start Instrument Tools -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs md-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#weather" role="tab" aria-expanded="true">Weather Station</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#water_level" role="tab" aria-expanded="false">Water Level</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#piezometer" role="tab" aria-expanded="false">Piezometer</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#inclinometer" role="tab">Inclinometer</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content card-block">
                            <div class="tab-pane active" id="weather" role="tabpanel" aria-expanded="true">

                                <div class="clearfix">
                                    <div class="pull-right">
                                        <form class="form-inline">
                                            <div class="form-group" style="margin-right: 20px">

                                                <select class="form-control">
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>

                                            <div class="form-group">

                                                <select class="form-control">
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="tab-pane" id="water_level" role="tabpanel" aria-expanded="false">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.092910697984!2d110.9196703142099!3d-6.758524167966169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d066644f3671%3A0x5a2fdbec08f39d33!2sWaduk+Logung!5e0!3m2!1sid!2sid!4v1545211754421" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane" id="piezometer" role="tabpanel" aria-expanded="false">
                                <h2>Piezometer</h2>
                            </div>
                            <div class="tab-pane" id="inclinometer" role="tabpanel">
                                Inclinometer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instrument Tools -->
    </div>

</template>

<script>


    // Initialize InputMask
    // $(":input").inputmask();

    export default {

        props: ['id'],

        title: 'Detail Dam',
        data: () => ({
            dam: [],
        }),

        mounted() {
            this.getDam()
            console.log('The ID is ' + this.id);
            
        },
        
        watch: {
        },

        methods: {
            
            getDam()
            {
                let vm = this;
                
                axios.get('/api/dam/detail/'+this.id)
                .then(function (res) {
                    var data = res.data;
                    vm.dam = data
                    console.log(data);
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    } 
</script>