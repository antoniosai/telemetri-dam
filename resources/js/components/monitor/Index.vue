<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    <div class="card-header">
                        <h4>List of File ARR @Logung Kudus</h4>
                    </div>

                    <div class="card-body">
                        <v-client-table :data="dam" :columns="columns" :options="options"></v-client-table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
    

        title: 'Management Dam',
        data: () => ({
            title: '',
            dam: [],
            columns: ['kode_bendungan', 'nama', 'alamat'],
            options: {
                
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
            getDam(url = '/api/dam') {
                axios.get(url, { headers: {'Access-Control-Allow-Origin': '*'} } )
                .then(response => {
                    let data = response.data;
                        this.dam = data.data.data;
                        // console.log(data.data.data);
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
    } 
</script>