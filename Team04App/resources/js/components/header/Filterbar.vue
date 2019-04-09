<template>
    <div class="container mb-4">
        <div class="form-row justify-content-center">
            <div class="col-2 col-lg-1">
                <select class="form-control btn btn-dark" name="type" v-model='selected'>
                    <option disabled value="">Type</option>
                    <option v-for='(type, index) in listingTypes' :key='index'> {{ type }} </option>
                </select>
            </div>
            <div class="col-2 col-lg-1">
                <button id="priceMenuButton" class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Price
                </button>
                <div class="dropdown-menu" aria-labelledby="priceMenuButton">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="minprice" v-model.number='minPrice' placeholder="Min">
                        </div>
                        <div class="col-1 text-center pt-2">
                            -
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="maxprice" v-model.number='maxPrice' placeholder="Max">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-lg-2">
                <select class="form-control btn btn-dark" name="bedrooms" v-model='numBeds'>
                    <option disabled value="">Bedrooms</option>
                    <option v-for='(bed, index) in bedsList' :key='index'> {{ bed }} </option>
                </select>
            </div>
            <div class="col-3 col-lg-2">
                <select class="form-control btn btn-dark" name="bathrooms" v-model='numBathrooms'>
                    <option disabled value="">Bathrooms</option>
                    <option v-for='(bathroom, index) in bathroomList' :key='index'> {{ bathroom }} </option>
                </select>
            </div>
            <div class="col-2 col-lg-2">
                <select class="form-control btn btn-dark" name="sort" v-model='sort'>
                    <option disabled value="">Sort</option>
                    <option v-for='(sort, index) in sortList' :key='index'> {{ sort }} </option>
                </select>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data: function (){
            return {
                listingTypes: ['Room', 'Apartment', 'House'],
                bedsList: ['0+', '1+', '2+', '3+', '4+'],
                bathroomList: ['0+', '1+', '2+', '3+', '4+'],
                sortList: ['Most Recent', 'Distance to Campus', 'Commute Time'],
                selected: '',
                minPrice: null,
                maxPrice: null,
                numBeds: '',
                numBathrooms: '',
                sort: '',
            }
        },
        beforeCreate(){
            // extract from DB before component is created
            const endpoint = '/api/listings';
            axios.get(endpoint)
                .then(res => {
                    // send all listings to Vuex
                    this.$store.dispatch('mutateAllListings', res.data);
                    this.$store.dispatch('mutateLoading', false);
                })
                .catch(() => {
                    console.log('Error retrieving from ', endpoint);
                });
        },
        beforeUpdate() {
            // redirect to home page when component updates
            this.$router.push({name: 'home'});
        },
    }
</script>

<style scoped>
    #priceMenuButton{
        width: 95%;
        padding-left: 2px;
    }
    select{
        cursor: pointer;
    }
    .show{
        padding: 0;
        margin: 0;
    }
</style>

