@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')



<!-- End Widget Linearea Color -->
<div class="col-xl-4 col-lg-4">
        <!-- Widget Linearea Color -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-shadow card-responsive" id="widgetLineareaColor">
                <div class="card-block p-0">
                    <div class="pt-30 p-30">
                        <p class="font-size-20 blue-grey-700">Select a Site</p>
                        <p id="desc">Please select a site on map (right side) or search on the form below</p>
                        <form action="" class="form-inline">
                            
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        
            </div>
        </div>

        <div class="col-md-12">
            <div class="card card-shadow card-responsive" id="widgetLineareaColor">
                <div class="card-block p-0">
                    <div class="pt-30 p-30">
                        <p class="font-size-20 blue-grey-700">Select View Style</p>
                        <p id="view-style">Please select a view style for list of site on the right side (default view : Maps)</p>

                        <div class="btn-group">
                            <a href="" class="btn btn-sm" data-toggle="tooltip" title="Table View"><i class="fa fa-lg fa-table"></i></a>
                            <a href="" class="btn btn-sm" data-toggle="tooltip" title="List View"><i class="fa fa-lg fa-list"></i></a>
                            <a href="" class="btn btn-sm" data-toggle="tooltip" title="Maps View"><i class="fa fa-lg fa-map"></i></a>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</div>
<!-- End Widget Linepoint -->
<div class="col-xl-8 col-lg-8">
        <!-- Widget Linearea Color -->
    <div class="card card-shadow card-responsive" id="widgetLineareaColor">
        <div class="card-block p-0">
            <div id="view">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1859719657173!2d107.93789594948616!3d-7.219616672866407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b1921e384f1f%3A0x6ae23a98ee614243!2sRumah+Solusi+20!5e0!3m2!1sid!2sid!4v1543653022503" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
        
@endsection

@section('summary')
<div class="col-xs-12">
        <div class="row h-full" data-plugin="matchHeight">
            <div class="col-xxl-12 col-lg-4 col-sm-4" style="height: 218.328px;">
                <div class="card card-shadow card-completed-options">
                    <div class="card-block p-30">
                        <div class="row">
                            <div class="col-6">
                                <div class="counter text-left blue-grey-700">
                                    <div class="counter-label mt-10">Dam(s) Registered
                                    </div>
                                    <div class="counter-number font-size-40 mt-10">
                                        {{ count($bendungan) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                                    data-barcolor="#57c7d4" data-size="100" data-barsize="15" data-goal="86" aria-valuenow="{{ $persentasi_pencapaian }}"
                                    role="progressbar">
                                    <span class="pie-progress-number blue-grey-700 font-size-20">
                                        {{ $persentasi_pencapaian }}%
                                    </span>
                                    <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet"
                                        
                                            viewBox="0 0 100 100">
                                            <ellipse rx="45" ry="45" cx="50" cy="50" stroke="#f2f2f2" fill="none"
                                                stroke-width="10"></ellipse>
                                            <path fill="none" stroke-width="10" stroke="#57c7d4" d="M50,5 A45,45 0 1 1 15.326904075089466,21.31592046130898"
                                                style="stroke-dasharray: 243.173, 243.173; stroke-dashoffset: 0;"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-lg-4 col-sm-4" style="height: 218.328px;">
                <div class="card card-shadow card-completed-options">
                    <div class="card-block p-30">
                        <div class="row">
                            <div class="col-6">
                                <div class="counter text-left blue-grey-700">
                                    <div class="counter-label mt-10">Peringatan Bendungan
                                    </div>
                                    <div class="counter-number font-size-40 mt-10">
                                        698
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                                    data-barcolor="#ffcd38" data-size="100" data-barsize="10" data-goal="62" aria-valuenow="62"
                                    role="progressbar">
                                    <span class="pie-progress-number blue-grey-700 font-size-20">
                                        62%
                                    </span>
                                    <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet"
                                            viewBox="0 0 100 100">
                                            <ellipse rx="45" ry="45" cx="50" cy="50" stroke="#f2f2f2" fill="none"
                                                stroke-width="10"></ellipse>
                                            <path fill="none" stroke-width="10" stroke="#ffcd38" d="M50,5 A45,45 0 1 1 19.195380233209022,82.80358823396352"
                                                style="stroke-dasharray: 175.309, 175.309; stroke-dashoffset: 0;"></path>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-lg-4 col-sm-4" style="height: 218.328px;">
                <div class="card card-shadow card-completed-options">
                    <div class="card-block p-30">
                        <div class="row">
                            <div class="col-6">
                                <div class="counter text-left blue-grey-700">
                                    <div class="counter-label mt-10">Cards Completed
                                    </div>
                                    <div class="counter-number font-size-40 mt-10">
                                        1,358
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                                    data-barcolor="#618833" data-size="100" data-barsize="10" data-goal="56" aria-valuenow="56"
                                    role="progressbar">
                                    <span class="pie-progress-number blue-grey-700 font-size-20">
                                        56%
                                    </span>
                                    <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet"
                                            viewBox="0 0 100 100">
                                            <ellipse rx="45" ry="45" cx="50" cy="50" stroke="#f2f2f2" fill="none"
                                                stroke-width="10"></ellipse>
                                            <path fill="none" stroke-width="10" stroke="#618833" d="M50,5 A45,45 0 1 1 33.4343951291895,91.83994186497131"
                                                style="stroke-dasharray: 158.34, 158.34; stroke-dashoffset: 0;"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection