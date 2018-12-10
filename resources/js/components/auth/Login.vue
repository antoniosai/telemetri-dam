<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            <p>There was an error, unable to sign in with those credentials.</p>
        </div>
        <form autocomplete="off" @submit.prevent="login" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
            </div>
            <button type="submit" class="btn btn-default" @click="login">Sign in</button>
        </form>
    </div>
</template>

<script>

    import axios from 'axios';

    // Vue.use('axios');

    export default {
        data(){
            return {
                email: null,
                password: null,
                error: false
            }
        },

        mounted(){
        },

        methods: {
            login(){
                var app = this

                var credentials = {
                    email: app.email,
                    password: app.password
                }

                axios.post('/login', credentials)
                .then( response => {

                    var data = response.data

                    toastr.success('Anda berhasil Login!', 'Selamat Datang ' + data.user.name)
                    this.$router.push('/dashboard')
                    // console.log(data.user)
                })
                .catch();
            },
        }
    }   
</script>