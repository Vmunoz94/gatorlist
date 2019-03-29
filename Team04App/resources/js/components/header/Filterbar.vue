<template>
    <div class="container mb-5">
            <!-- <form> -->
                <div class="form-row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 justify-content-center pr-0 mr-0 pb-2">
                        <div class="ui icon input fluid">
                            <input type="text" v-model='search' placeholder="Search...">
                            <i class="search icon"></i>
                        </div>
                    </div>
                </div>

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
            <!-- </form> -->
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
            const endpoint = '/api/listings';
            axios.get(endpoint)
                .then(res => {
                    this.$store.dispatch('mutateAllListings', res.data);
                    this.$store.dispatch('mutateLoading', false);
                })
                .catch(() => {
                    console.log('Error retrieving from ', endpoint);
                });
        },
        beforeUpdate() {
            this.$router.push({name: 'home'});
        },
        computed: {
            search: {
                get(){
                    return this.$store.getters.getSearch;
                },
                set(search){
                    this.$store.dispatch('mutateSearch', search)
                }
            }
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
    button:disabled{
        opacity: 1;
    }
</style>

