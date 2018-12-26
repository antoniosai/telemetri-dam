<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h5>Draggable Default</h5>
                        <div class="card-header-right">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-filter"></i> Panduan Filter</button>
                            <router-link style="margin-right: 30px" :to="{name: 'user.register'}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Register New Dam</router-link>
                        </div>
                    </div>

                    <div class="card-body">
                        <vue-good-table :columns="columns" :rows="user" :search-options="options.search" :pagination-options="options.pagination" :line-numbers="true" styleClass="vgt-table condensed">
                            <template slot="table-row" slot-scope="props">
                                <span v-if="props.column.field == 'username'">
                                    <span class="badge badge-primary">{{ '@'+props.row.username}}</span> 
                                </span>
                                <span v-if="props.column.field == 'name'">
                                    <span><router-link :to="{ name: 'user.detail', params: { id: 3 }}">{{ props.row.name }}</router-link></span>
                                    <!-- <span><router-link :to="{ name: 'user.detail', params: {id_user: props.row.id } }" >{{ props.row.name }}</router-link></span>  -->
                                </span>
                                <span v-if="props.column.field == 'email'">
                                    <span v-if="props.row.email != null">{{props.row.email}}</span>
                                    <span v-else><label class="label label-default">Belum Diisi</label></span>
                                </span>
                                <span v-if="props.column.field == 'role'">
                                    <span v-if="props.row.role != null">{{props.row.role}}</span>
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
                                            <router-link :to="{ name: 'user.edit', params: {id: props.row.id } }" class="dropdown-item"><i class="fa fa-pencil fa-lg"></i> Edit</router-link>
                                            <button @click.prevent="deleteUser(props.row.id, props.row.name)" class="dropdown-item"><i class="fa fa-trash fa-lg"></i> Delete</button>
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
            user: [],
            columns: [
                {
                    label: 'Username',
                    field: 'username',
                    filterOptions: {
                        enabled: true
                    },
                    width: '120px'
                }, 
                {
                    label: 'Nama Lengkap',
                    field: 'name',
                    filterOptions: {
                        enabled: true
                    },
                },
                {
                    label: 'E-Mail',
                    field: 'email',
                    filterOptions: {
                        enabled: true
                    },
                },
                {
                    label: 'Role',
                    field: 'role',
                    width: '120px',
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
            this.getUser()
            this.listRole()
        },
        
        watch: {
            // whenever question changes, this function will run
            
        },

        methods: {
            getUser(url = '/api/user_management') {

                axios.get(url)
                .then(res => {
                    let data = res.data;
                    this.user = data;
                    console.log(data);
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

            listRole()
            {
                let vm = this

                axios.get('/api/user_management/list_role')
                .then(res => {
                    console.log(res.data)
                    vm.columns[3].filterOptions.filterDropdownItems = res.data
                })
            },

            deleteUser(id, nama)
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
                        axios.delete('/api/user_management/detail/'+id)
                        .then(function (res) {
                            console.log(res)
                            if(res.data.status == 'success')
                            {
                                toastr.success(res.data.message)
                                vm.getUser();
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