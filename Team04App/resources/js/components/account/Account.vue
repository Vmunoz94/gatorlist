<template>
<div class="container-fluid">
    <div class="split left">
        <div class="navbar navbar-inverse navbar-fixed-left">
            <div class="text-left">
                <ul class="nav navbar-nav">
                    <li class="ui text-dark Black button small w-75 mx-auto my-2"> Account Details </li>
                    <li class="ui text-dark Black button small w-75 mx-auto my-2"> Pending Listings </li>
                    <li class="ui text-dark Black button small w-75 mx-auto my-2"> Edit Listings </li>
                    <li class="ui text-dark Black button small w-75 mx-auto my-2"> Messages </li>
                </ul>        
            </div>
        </div>    
    </div> 
    <div class="split right">
        <div class="center">
        <ul class="nav navbar-nav">
            <li> hi</li>
            <li>hello</li>
        </ul>
        </div>
    </div>       
</div>
</template>


<script>
    export default {
        data: function () {
            return{
                actions: [{
                    role: 'Backend',
                    name: 'Account Details',
                    component: 'gatorlist-account_details-component',
                    link: '/account_details',
                },
                {
                    // role: 'Backend',
                    name: 'Pending Listings',
                    component: 'gatorlist-pending_listings-component',
                    link: '/pending_listings',
                },
                {
                    // role: 'Backend',
                    name: 'Add Listing',
                    component: 'gatorlist-add_listing-component',
                    link: '/add_listing',
                },
                {
                    // role: 'Backend',
                    name: 'Edit Listing',
                    component: 'gatorlist-edit_listing-component',
                    link: '/edit_listing',
                },
                {
                    // role: 'Backend',
                    name: 'Messages',
                    component: 'gatorlist-login-component',
                    link: '/login',
                }],
            }
        },
    }
</script>

<style scoped>
.navbar {
        background-color: transparent !important;
    }
    .navbar-light .navbar-nav .nav-link:hover {
        box-shadow: 0px 2px 10px black;
        -moz-box-shadow: 0 2px 10px black;
        -webkit-box-shadow: 0 2px 10px black;
        background-color: black !important;
        border-radius: 5px;

        transition: color 0.1s ease-in-out;
        color: white !important;
    }
</style>

