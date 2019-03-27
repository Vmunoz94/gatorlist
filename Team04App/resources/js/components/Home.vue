<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <gatorlist-listings></gatorlist-listings>
            </div>
            <div class="col border-left hide">
                <gatorlist-google-maps :lat='37.7749' :lng='-122.4194' :zoom='12' class="mapStyle"></gatorlist-google-maps>
            </div>
        </div>
    </div>
</template>

<script>
    import Listings from './search/Listings.vue'
    import GoogleMaps from './search/GoogleMaps.vue'

    export default {
        data: function (){
            return {
                
            }
        },
        components: {
            'gatorlist-listings': Listings,
            'gatorlist-google-maps': GoogleMaps,
        }
    }
</script>


<style>
    .mapStyle {
        position: fixed;
        top: 14px;
        width: 100%;
        height: 96vh;
        border: 1px solid black;
        box-shadow: 0 1px 10px black;
        -moz-box-shadow: 0 1px 10px black;
        -webkit-box-shadow: 0 1px 10px black;
        background-color: rgb(170, 178, 187);
    }
    @media only screen and (max-width: 992px) {
        .hide{
            display: none;
        }
    }
</style>