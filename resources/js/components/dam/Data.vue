<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{ title }}</div>

                    <div class="card-body">
                        I'm an example componensst.
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
        title: 'Data DAM',
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
