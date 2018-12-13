<template>
    <div>

        <div class="card card-primary">
            
            <div class="card-body">

                <div class="alert alert-success">
                    <p>You have to login before continue</p>
                </div>

                <div class="alert alert-danger" v-if="error">
                    <p>There was an error, unable to sign in with those credentials.</p>
                </div>
                <form autocomplete="off" @submit.prevent="login">
                    <div class="form-group">
                        <label for="username">E-mail</label>
                        <input type="text" id="username" class="form-control" placeholder="Username" v-model="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" v-model="password" required>
                    </div>
                    <button type="submit" class="btn btn-default">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                username: null,
                password: null,
                error: false
            }
        },

        mounted(){
            toastr.info('Please login before continue System')
        },

        methods: {
            login(){
                var app = this
                this.$auth.login({
                    params: {
                        username: app.username,
                        password: app.password
                    }, 
                    success: function () {
                        toastr.success('Berhasil', 'Anda berhasil login')
                    },
                    error: function (resp) {
                        toastr.error(resp.response.data.msg)
                    },
                    rememberMe: true,
                    redirect: '/dashboard',
                    fetchUser: true,
                });             
            },
        }
    }   
</script>
