<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ dam.nama }}</h2>
            </div>
        </div>
    </div>

</template>

<script>

    // Initialize InputMask
    // $(":input").inputmask();

    export default {

        props: ['id'],

        title: 'Register New DAM',
        data: () => ({
            dam: []
        }),

        mounted() {
            this.getDam()
            console.log(this.id);
            
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
            
            getDam()
            {
                let vm = this;
                
                axios.get('/dam/detail/'+this.id)
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