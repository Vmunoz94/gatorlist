<template>
    <div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light py-0">
            <div class="container">
                <span class="navbar-brand text-dark">
                    <router-link to='/' class="nav-link text-dark py-1"><i class="fas fa-home"/> GatorList</router-link>
                </span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
                    <span class="navbar-toggler-icon"/>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggle">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item p-0">
                            <router-link to='/postListing' class="nav-link text-dark">Post Listing</router-link>
                        </li>
                        <li class="nav-item p-0">
                            <router-link to='/about' class="nav-link text-dark">About</router-link>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item p-0">
                            <router-link to='/account' class="nav-link text-dark">My Account</router-link>
                        </li>
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

        <!-- import components -->
        <gatorlist-jumbotron/>
        <gatorlist-searchbar/>
        <gatorlist-filterbar/>
    </div>
</template>

<script>
    import Jumbotron from './Jumbotron.vue';
    import SearchBar from './SearchBar.vue';
    import Filterbar from './Filterbar.vue';

    export default {
        data: function (){
            return {
                listingTypes: ['Room', 'Apartment', 'House'],
                selected: '',
                search: '',
            }
        },
        components: {
            'gatorlist-jumbotron': Jumbotron,
            'gatorlist-searchbar': SearchBar,
            'gatorlist-filterbar': Filterbar,
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