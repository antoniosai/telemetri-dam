<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h4 class="card-title">{{ title }}</h4>
                    </div>

                    <div class="card-body">
                        <div class="projects">
                            <div class="tableFilters">
                                <input class="input" type="text" v-model="tableData.search" placeholder="Search Table"
                                    @input="getDam()">

                                <div class="control">
                                    <div class="select">
                                        <select v-model="tableData.length" @change="getDam()">
                                            <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
                                <tbody>
                                    <tr v-for="list in dam" :key="list.id">
                                        <td>{{list.kode_bendungan}}</td>
                                        <td>{{list.nama}}</td>
                                        <td>{{list.alamat}}</td>
                                    </tr>
                                </tbody>
                            </datatable>
                            <pagination :pagination="pagination"
                                        @prev="getDam(pagination.prevPageUrl)"
                                        @next="getDam(pagination.nextPageUrl)">
                            </pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import { DataTables, DataTablesServer } from 'vue-data-tables'
    import Datatable from '../../components/table/Datatable.vue';
    import Pagination from '../../components/table/Pagination.vue';

    import axios from 'axios';

    var title = 'Data DAM';

    export default {
        title: title,

        components: { datatable: Datatable, pagination: Pagination },
        created() {
            this.getDam();
        },
        data() {
            let sortOrders = {};

            let columns = [
                {width: '33%', label: 'Deadline', name: 'nama' },
                {width: '33%', label: 'Budget', name: 'keterangan'},
                {width: '33%', label: 'Status', name: 'alamat'}
            ];

            columns.forEach((column) => {
            sortOrders[column.name] = -1;
            });
            return {
                title: title,
                dam: [],
                columns: columns,
                sortKey: 'deadline',
                sortOrders: sortOrders,
                perPage: ['10', '20', '30'],
                tableData: {
                    draw: 0,
                    length: 10,
                    search: '',
                    column: 0,
                    dir: 'desc',
                },
                pagination: {
                    lastPage: '',
                    currentPage: '',
                    total: '',
                    lastPageUrl: '',
                    nextPageUrl: '',
                    prevPageUrl: '',
                    from: '',
                    to: ''
                },
            }
        },
        methods: {
            getDam(url = '/dam') {
                this.tableData.draw++;
                axios.get(url, {params: this.tableData})
                    .then(response => {
                        let data = response.data;
                        if (this.tableData.draw == data.draw) {
                            this.dam = data.data.data;
                            this.configPagination(data.data);
                        }
                    })
                    .catch(errors => {
                        console.log(errors);
                    });
            },
            configPagination(data) {
                this.pagination.lastPage = data.last_page;
                this.pagination.currentPage = data.current_page;
                this.pagination.total = data.total;
                this.pagination.lastPageUrl = data.last_page_url;
                this.pagination.nextPageUrl = data.next_page_url;
                this.pagination.prevPageUrl = data.prev_page_url;
                this.pagination.from = data.from;
                this.pagination.to = data.to;
            },
            sortBy(key) {
                this.sortKey = key;
                this.sortOrders[key] = this.sortOrders[key] * -1;
                this.tableData.column = this.getIndex(this.columns, 'name', key);
                this.tableData.dir = this.sortOrders[key] === 1 ? 'asc' : 'desc';
                this.getDam();
            },
            getIndex(array, key, value) {
                return array.findIndex(i => i[key] == value)
            },
        }
    };
</script>
