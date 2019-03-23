<template>
    <div class="container mb-5">
            <form>
                <div class="form-row justify-content-center">
                    <div class="col-3 col-lg-1 pb-2">
                        <select class="form-control" name="type" v-model='selected'>
                            <option disabled value="">Type</option>
                            <option v-for='type in listingTypes'> {{ type }} </option>
                        </select>
                    </div>
                    <div class="col-8 col-lg-4 pb-2 pr-0 mr-0">
                        <input type="text" class="form-control" v-model='search' placeholder="Type, City, Street, Zip, Price">
                    </div>
                    <div class="col-1 col-lg-1 pb-2 pl-0 ml-0">
                        <button class="btn btn-dark inactive" disabled><i class="fas fa-search"></i></button>
                    </div>
                    <div class="col-3 col-lg-1">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="priceMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="col-3 col-lg-1">
                        <select class="form-control btn btn-dark" name="bedrooms" v-model='numBeds'>
                            <option disabled value="">Beds</option>
                            <option v-for='bed in bedsList'> {{ bed }} </option>
                        </select>
                    </div>
                    <div class="col-3 col-lg-2">
                        <select class="form-control btn btn-dark" name="bathrooms" v-model='numBathrooms'>
                            <option disabled value="">Bathrooms</option>
                            <option v-for='bathroom in bathroomList'> {{ bathroom }} </option>
                        </select>
                    </div>
                    <div class="col-3 col-lg-2">
                        <select class="form-control btn btn-dark" name="sort" v-model='sort'>
                            <option disabled value="">Sort</option>
                            <option v-for='sort in sortList'> {{ sort }} </option>
                        </select>
                    </div>
                </div>
                <!-- testing purposes-->
                <!-- <div>Type: {{ selected }}</div>
                <div>Search: {{ search }}</div>
                <div>Price Min: {{ minPrice }}</div>
                <div>Price Max: {{ maxPrice }}</div>
                <div># of Beds: {{ numBeds }}</div>
                <div># of Bathrooms: {{ numBathrooms }}</div>
                <div>sort: {{ sort }}</div> -->
            </form>
        </div>
</template>

<script>
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
