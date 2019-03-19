<template>
    <div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <span class="navbar-brand text-dark"><i class="fas fa-home"/> GatorList</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                    <span class="navbar-toggler-icon"/>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggle">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item p-0">
                        <router-link to='/' class="nav-link text-dark">Home</router-link>
                    </li>
                    <li class="nav-item p-0">
                        <router-link to='/about' class="nav-link text-dark">About</router-link>
                    </li>
                    </ul>
                    <ul class="navbar-nav">
                    <li class="nav-item p-0">
                        <router-link to='/login' class="nav-link text-dark">Login</router-link>
                    </li>
                    <li class="nav-item p-0">
                        <router-link to='/register' class="nav-link text-dark">Register</router-link>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <gatorlist-jumbotron></gatorlist-jumbotron>
    </div>
</template>

<script>
    import Jumbotron from './Jumbotron.vue';

    export default {
        props: {
            'title': String,
        },
        components: {
            'gatorlist-jumbotron': Jumbotron,
        },
    }
</script>

<style scoped>
    /* change the color of the navbar */
    .navbar {
        background-color: transparent !important;
    }
    /* add space between nav-links */
    .navbar-light .navbar-nav .nav-link {
        padding: 5px 10px;
    }
    /* create the hover effect */
    .navbar-light .navbar-nav .nav-link:hover {
        box-shadow: 0px 2px 10px black;
        -moz-box-shadow: 0 2px 10px black;
        -webkit-box-shadow: 0 2px 10px black;
        background-color: #343a40 !important;
        border-radius: 5px;

        transition: color 0.1s ease-in-out;
        color: white !important;
    }
</style>