<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h5>Draggable Default</h5>
                        <div class="card-header-right">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-filter"></i> Panduan Filter</button>
                            <router-link style="margin-right: 30px" :to="{name: 'dam.register'}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Register New Dam</router-link>


                            
                        </div>
                    </div>

                    <div class="card-body">
                        <vue-good-table :columns="columns" :rows="dam" :search-options="options.search" :pagination-options="options.pagination" :line-numbers="true" styleClass="vgt-table condensed">
                            <template slot="table-row" slot-scope="props">
                                <span v-if="props.column.field == 'kode_bendungan'">
                                    <span class="badge badge-primary">{{props.row.kode_bendungan}}</span> 
                                </span>
                                <span v-if="props.column.field == 'nama'">
                                    <span><router-link :to="{ name: 'dam.detail', params: {id: props.row.id } }" >{{ props.row.nama }}</router-link></span> 
                                </span>
                                <span v-if="props.column.field == 'provinsi'">
                                    <span v-if="props.row.provinsi != null">{{props.row.provinsi}}</span>
                                    <span v-else><label class="label label-default">Belum Diisi</label></span>
                                </span>
                                <span v-if="props.column.field == 'kota'">
                                    <span v-if="props.row.kota != null">{{props.row.kota}}</span>
                                    <span v-else><label class="label label-default">Belum Diisi</label></span>
                                </span>
                                <span v-else-if="props.column.field == 'status'">
                                    <span class="badge badge-danger">{{ setStatus(props.row.id) }}</span>
                                </span>
                                <span v-else-if="props.column.field == 'last_response'">
                                    <span>{{ props.row.last_response }}</span>
                                </span>
                                <span v-else-if="props.column.field == 'after'">
                                    <div class="dropdown">
                                        <button class="btn btn-mini btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="false" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <router-link :to="{ name: 'dam.edit', params: {id: props.row.id } }" class="dropdown-item"><i class="fa fa-pencil fa-lg"></i> Edit</router-link>
                                            <button @click.prevent="deleteDam(props.row.id, props.row.nama)" class="dropdown-item"><i class="fa fa-trash fa-lg"></i> Delete</button>
                                        </div>
                                    </div>
                                </span>
                                
                            </template>
                        </vue-good-table>
                        <!-- <v-client-table :data="dam" :columns="columns" :options="options"></v-client-table> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import 'vue-good-table/dist/vue-good-table.css'

    import { VueGoodTable } from 'vue-good-table';


    export default {

        title: 'Management Dam',
        
        data: () => ({
            title: '',
            provinsi: [],
            dam: [],
            columns: [
                {
                    label: 'Kode Bendungan',
                    field: 'kode_bendungan',
                    filterOptions: {
                        enabled: true
                    },
                    width: '120px'
                }, 
                {
                    label: 'Nama Bendungan',
                    field: 'nama',
                    filterOptions: {
                        enabled: true
                    },
                },
                {
                    label: 'Provinsi',
                    field: 'provinsi',
                    filterOptions: {
                        enabled: true, // enable filter for this column
                        placeholder: 'Semua Provinsi', // placeholder for filter input
                        filterValue: '', // initial populated value for this filter
                        filterDropdownItems: [], // dropdown (with selected values) instead of text input
                        filterFn: this.columnFilterFn, //custom filter function that
                        trigger: 'enter', //only trigger on enter not on keyup 
                    },
                },
                {
                    label: 'Kota/Kabupaten',
                    field: 'kota',
                },
                {
                    label: '',
                    field: 'status'
                },
                {
                    label: 'Last Response',
                    field: 'last_response'
                },
                {
                    label: '',
                    field: 'after'
                }
            ],
            options: {
                pagination: {
                    enabled: true,
                    mode: 'records',
                    perPage: 10,
                    position: 'bottom',
                    perPageDropdown: [10, 20, 50, 100],
                    dropdownAllowAll: false,
                    setCurrentPage: 2,
                    nextLabel: 'next',
                    prevLabel: 'prev',
                    rowsPerPageLabel: 'Rows per page',
                    ofLabel: 'of',
                    pageLabel: 'page', // for 'pages' mode
                    allLabel: 'All',
                },
                search: {
                    enabled: true,
                    initialSortBy: {field: 'kode_bendungan', type: 'asc'}
                }
                
            }
        }),

        mounted() {
            this.getDam()
            this.listProv()
        },
        
        watch: {
            // whenever question changes, this function will run
            
        },

        methods: {
            getDam(url = '/api/dam') {
                axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    this.dam = data.data.data;
                        console.log(data.data.data);
                })
                .catch(errors => {
                    console.log(errors);
                });
            },

            setStatus(dam_id)
            {
                let id = dam_id

                if(id == id)
                {
                    return 'Online'
                }
                else
                {
                    return 'Offline'
                }
            },

            listProv()
            {
                let vm = this

                axios.get('/api/wilayah/nama_provinsi')
                .then(res => {
                    console.log(res.data)
                    vm.columns[2].filterOptions.filterDropdownItems = res.data
                })
            },

            deleteDam(id, nama)
            {

                let vm = this

                swal({
                    title: "Hapus Bendungan "+ nama +" dari Sistem?",
                    text: "Data-data tidak akan bisa dikembalikan ketika dihapus",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((save) => {
                    if (save) {
                        axios.delete('/api/dam/'+id)
                        .then(function (res) {
                            console.log(res)
                            if(res.data.status == 'success')
                            {
                                toastr.success(res.data.message)
                                vm.getDam();
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

        },
        
        components: {
            VueGoodTable,
        }
    } 
</script>