<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h4>Data DAM</h4>
                    </div>

                    <div class="clearfix">
                        <div class="pull-right">
                            <router-link :to="{name: 'dam.register'}" class="btn btn-md btn-primary">Register New Dam</router-link>
                        </div>
                    </div>

                    <div class="card-body">
                        <vue-good-table :columns="columns" :rows="dam" :search-options="options.search":pagination-options="options.pagination">
                            <template slot="table-row" slot-scope="props">
                                <span v-if="props.column.field == 'kode_bendungan'">
                                    <span class="badge badge-primary">{{props.row.kode_bendungan}}</span> 
                                </span>
                                <span v-if="props.column.field == 'nama'">
                                    <span style="font-weight: bold; color: red;">{{props.row.nama}}</span> 
                                </span>
                                <span v-if="props.column.field == 'created_at'">
                                    <span style="font-weight: bold; color: red;">{{props.row.created_at}}</span> 
                                </span>
                                <span v-else-if="props.column.field == 'after'">
                                    <router-link to="/dashboard" class="btn btn-mini btn-warning"><i class="fa fa-pencil fa-lg"></i> Edit</router-link>
                                    <router-link to="/dashboard" class="btn btn-mini btn-danger"><i class="fa fa-trash fa-lg"></i> Edit</router-link>
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
            dam: [],
            columns: [
                {
                    label: 'Kode Bendungan',
                    field: 'kode_bendungan',
                    filterOptions: {
                    enabled: true, // enable filter for this column
                        placeholder: 'Filter Kode Bendungan', // placeholder for filter input
                        filterValue: '', // initial populated value for this filter
                        filterDropdownItems: [], // dropdown (with selected values) instead of text input
                        filterFn: this.columnFilterFn, //custom filter function that
                        trigger: 'enter', //only trigger on enter not on keyup 
                        filterDropdownItems: ['KUDUS-1', 'BENDO-1']
                    },
                    width: '250px'
                }, 
                {
                    label: 'Nama Bendungan',
                    field: 'nama',
                }, 
                {
                    label: '',
                    field: 'after',
                    // field: 'created_at',
                    // type: 'date',
                    // dateInputFormat: 'YYYY-MM-DD',
                    // dateOutputFormat: 'MMM Do YY',
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
            getDam(url = '/dam') {
                axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                        this.dam = data.data.data;
                        // console.log(data.data.data);
                })
                .catch(errors => {
                    console.log(errors);
                });
            },

        },
        components: {
            VueGoodTable,
        }
    } 
</script>