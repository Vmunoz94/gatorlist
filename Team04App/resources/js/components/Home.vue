<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <gatorlist-listings></gatorlist-listings>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</template>

<script>
    import Listings from './search/Listings.vue'

    export default {
        data: function (){
            return {
                
            }
        },
        components: {
            'gatorlist-listings': Listings,
        }
    }
</script>


<style>
    
</style>