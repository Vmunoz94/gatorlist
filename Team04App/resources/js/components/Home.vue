<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <gatorlist-listings></gatorlist-listings>
            </div>
            <div class="col border-left hide">
                <gatorlist-google-maps></gatorlist-google-maps>
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
    @media only screen and (max-width: 992px) {
        .hide{
            display: none;
        }
    }
</style>
