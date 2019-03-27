<template>
    <div>
        <div class="login d-flex justify-content-center align-items-center">
            <h1>
                Login
            </h1>
        </div>

        <div class="form-content">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="form-group margin-top">
                        <label for="username"><i class="fas fa-user"></i> Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" v-model='username'>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" v-model='password'>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-3 mb-4">
                <div class="col-10">
                    <a href="#" >Forgot Password?</a>
                </div>
                <div class="col-10 mt-2">
                    <router-link to="/register">New User? Please Register</router-link>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block" :disabled='$v.$invalid'>Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
    import { required } from 'vuelidate/lib/validators';

    export default {
        data: function (){
            return {
                username: '',
                password: '',
            }
        },
        validations: {
            username: {
                required
            },
            password: {
                required
            }
        },
    }
</script>


<style scoped>
    .margin-top{
        margin-top: 125px;
    }

    .login{
        max-width: 350px;
        width: 70%;
        height: 150px;
        border: 1px solid black;
        border-radius: 5px;
        margin: auto;
        color: white;
        background-image: radial-gradient(circle, #6d1e83, #5f2973, #522f63, #463252, #3b3440);
        /* background-color: #343a40; */
        box-shadow: 0 2px 10px black;
        -moz-box-shadow: 0 2px 10px black;
        -webkit-box-shadow: 0 2px 10px black;
        z-index: 2;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }
    
    .form-content{
        max-width: 500px;
        width: 90%;
        height: 430px;
        border-radius: 5px;
        margin: 50px auto;
        border: 1px solid grey;
        z-index: 1;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        background-color: white;
        box-shadow: 0 1px 10px grey;
        -moz-box-shadow: 0 1px 10px grey;
        -webkit-box-shadow: 0 1px 10px grey;
    }
    .btn-outline-dark{
        border: none;
    }
    input{
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
    }
    .form-control:focus {
        border-color: purple;
        box-shadow: none;
    }
</style>
