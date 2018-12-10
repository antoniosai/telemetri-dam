@extends('layout.master')

@section('title')
{{ $data->nama }}
@endsection

@section('content')
<div class="col-sm-6 col-xl-6">
    <div class="card card-shadow card-responsive" id="widgetLineareaColor">
        <div class="card-block p-0">
            <div class="pt-30 p-30">
                <p class="font-size-30 blue-grey-700"><small>({{ $data->kode_bendungan }})</small> - {{ $data->nama }}</p>

                <div id="camera"></div>

                <table class="table">
                    <tr>
                        <td>Keluarahan/Desa</td>
                        <td>:</td>
                        <td>Tunjung Rejo</td>
                    </tr>

                    <tr>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td>Kec. Kandangmas</td>
                    </tr>
                    <tr>
                        <td>Kabupaten/Kota</td>
                        <td>:</td>
                        <td>Kab. Kudus</td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td>Jawa Tengah</td>
                    </tr>
                    <tr>
                        <td>Luas</td>
                        <td>:</td>
                        <td>402 (ha)</td>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td>:</td>
                        <td>{{ $data->latitude }}</td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td>:</td>
                        <td>{{ $data->longitude }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><span style="color:green">Good (7/7)</span></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>

<div class="col-sm-6 col-xl-6">
    <div class="card card-shadow card-responsive" id="widgetLineareaColor">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0928670418657!2d110.9196649497493!3d-6.758529495090549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d066644f3671%3A0x5a2fdbec08f39d33!2sWaduk+Logung!5e0!3m2!1sid!2sid!4v1543677635066" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<div class="col-md-12">
    <div class="btn-group">
        <button class="btn btn-warning">adas</button>
        <button class="btn btn-success">aasda</button>
        <button class="btn btn-danger">sad</button>
    </div>
</div>

<div class="col-sm-12 col-xl-12">
    <div class="card card-shadow card-responsive" id="widgetLineareaColor">
        <div class="card-block p-0">
            <div class="pt-30 p-30">
                <p class="font-size-30 blue-grey-700">{{ $data->nama }}</p>
                <p id="desc">Please select a site on map (right side) or search on the form below</p>
                
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/jquery.network-camera.js') }}"></script>

<script>
// $('#camera').networkCamera({
//     'url': "http://localhost:8000/img/logo-bws.png"
// });
</script>
@endsection