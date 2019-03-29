<template>
    <div>
        <div v-if='!this.loading'>
            <div class="row justify-content-center margin-top">
                <div class="col-10 text-center">
                    <h4><strong>Confirm Details</strong></h4>
                    <hr>
                </div>
            </div>

            <div v-if='confirmed'>
                <div class="row justify-content-center mb-5">
                    <div class="col-5 border-right">
                        <p><strong class="mr-3">Listing Type:</strong> 
                            <span class="d-flex">{{ this.getAddListing.type }}</span>
                        </p> 
                        <p><strong class="mr-3">Monthly Rent:</strong> 
                            <span class="d-flex">${{ this.getAddListing.rent }}</span>
                        </p> 
                        <p><strong class="mr-3">Address:</strong> 
                            <span class="d-flex">
                                {{ this.getAddListing.street }} {{ this.getAddListing.city }}, 
                                {{ this.getAddListing.state }}  {{ this.getAddListing.zip }}
                            </span>
                        </p> 
                        <img :src='this.getAddListing.image' class="img-fluid mb-3">
                        <p><strong class="mr-3">Description:</strong>
                            <span class="d-flex">{{ this.getAddListing.description }}</span>
                        </p> 
                    </div>
                    <div class="col-5">
                        <gatorlist-google-maps 
                            class="mapStyle" 
                            :lat="this.lat" 
                            :lng="this.lng" 
                            :zoom="15"
                            gestureHandling="none">
                        </gatorlist-google-maps>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-10">
                        <div class="alert alert-warning" role="alert">
                            Posting may take a maximum of 24hrs to be confirmed
                        </div>
                    </div>
                </div>
            </div>

            <div v-else>
                <div class="row justify-content-center mb-5">
                    <div class="col-10">
                        <div class="alert alert-danger" role="alert">
                            Location does not exist. Please go back.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-5">
                    <button class="btn btn-dark btn-lg btn-block" @click='goBack'>Go Back</button>
                </div>
                <div class="col-5">
                    <button class="btn btn-primary btn-lg btn-block" :disabled='!confirmed'>Confirm</button>
                </div>
            </div>
        </div>

        <div v-else class="d-flex justify-content-center align-items-center loading">
            <transition appear enter-active-class="animated fadeIn faster">
                <rotate-square5 size="100px"></rotate-square5>
            </transition>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    import { RotateSquare5 } from 'vue-loading-spinner';
    import GoogleMaps from '../search/GoogleMaps.vue'
    import axios from 'axios';

    export default {
        data: function () {
            return {
                confirmed: false,
                loading: true,
                lat: '',
                lng: '',
            }
        },
        components: {
            'gatorlist-google-maps': GoogleMaps,
            RotateSquare5,
        },
        methods: {
            goBack(){
                this.$router.push('/postListing');
            }
        },
        computed: {
            ...mapGetters([
                'getAddListing'
            ]),
        },
        created() {
            let address = [];
            address.push(this.getAddListing.street)
            address.push(this.getAddListing.city)
            address.push(this.getAddListing.state)
            address.push(this.getAddListing.zip)
            address = address.join(" ");

            var instance = axios.create();
            delete instance.defaults.headers.common['X-CSRF-TOKEN'];
            delete instance.defaults.headers.common['X-Requested-With'];

            instance.get('https://maps.googleapis.com/maps/api/geocode/json', {
                params: {
                    address,
                    // key: 'AIzaSyBmbDCDGERAGuQH7jGPLBg8MGd5sQpoxvY',
                }
            })
            .then((res) => {
                if (res.data.status === 'ZERO_RESULTS'){
                    console.log('Zero Results found');
                    this.confirmed = false;
                    this.loading = false;
                }
                else{
                    this.confirmed = true;
                    this.loading = false;
                    this.lat = res.data.results[0].geometry.location.lat
                    this.lng = res.data.results[0].geometry.location.lng
                }
            })
            .catch(() => {
                console.log('Could not retrieve location from Geocoding API');
                this.confirmed = false;
            });            
        },
    }
</script>

<style scoped>
    .loading{
        height: 75vh;
    }
    .margin-top{
        margin-top: 150px;
    }
    p{
        border: 1px solid rgb(212, 212, 212);
        border-radius: 5px;
        padding-left: 10px;
        padding-right: 10px;
    }
    img{
        border-radius: 5px;
    }
    .mapStyle {
        position: static;
        width: 100%;
        height: 250px;
    }
</style>