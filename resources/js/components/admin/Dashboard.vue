<template>
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
                                        44
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                                    data-barcolor="#57c7d4" data-size="100" data-barsize="15" data-goal="86" aria-valuenow="30"
                                    role="progressbar">
                                    <span class="pie-progress-number blue-grey-700 font-size-20">
                                        121
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

</template>

<script>
    // import { DataTables, DataTablesServer } from 'vue-data-tables'
    // Vue.use(DataTables);

    export default {
        title: 'Dashboard New',
        data(){
            return {
                cruds: [],
                title: 'Test'
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
