<template>
    <div>    
            <!-- <div class="card-deck"> -->
                <transition-group tag="div" class="card-deck mx-1" appear enter-active-class="animated fadeInUp faster" leave-active-class="animated fadeOutDown faster" mode="in-out">
                    <div class="card mb-4" v-for='(listing, index) in filteredListings' key='index'>
                        <img class="card-img-top" :src="listing.image" alt="Card image cap">
                        <div class="card-body py-3">
                        <h5 class="card-title text-center"><strong>{{ listing.type }}</strong></h5>
                        <hr>
                        <h5 class="card-title">Rent: <strong>${{ listing.rent }}</strong></h5>
                        <div class="row">
                            <div class="col">
                                <p class="card-text"><i class="fas fa-bed"></i> Beds: {{ listing.beds }}</p>
                            </div>
                            <div class="col">
                                <p class="card-text"><i class="fas fa-bath"></i> Baths: {{ listing.baths }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="card-text text-muted">{{ listing.street }},</div>
                        <div class="card-text text-muted">{{ listing.city }}, CA {{ listing.zip }}</div>
                        </div>
                    </div>
                </transition-group>
            <!-- </div> -->
        

        <div class="lead text-center mb-4">
            -- Showing {{ filteredListings.length }} out of {{ allListingsList.length }} Listings --
        </div>
    </div>

</template>

<script>
    import { mapGetters } from 'vuex';
    import dummyListings from './dummyListings.json';

    export default {
        data: function (){
            return {
                allListingsList: dummyListings,
            }
        },
        computed: {
            ...mapGetters([
                'getSearch'
            ]),
            filteredListings() {
                return this.allListingsList.filter((element) => {
                    let objectToArray = Object.values(element);
                    objectToArray.pop();
                    objectToArray = objectToArray.join("").toLowerCase();
                    return objectToArray.match(this.getSearch.toLowerCase());
                });
            }
        },
    }
</script>

<style scoped lang='scss'>
    hr{
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .card{
        box-shadow: 0 1px 10px black;
        -moz-box-shadow: 0 1px 10px black;
        -webkit-box-shadow: 0 1px 10px black;
        border: 1px solid grey;
    }

    .card:hover{
        cursor: pointer;
        box-shadow: 0 5px 20px black;
        -moz-box-shadow: 0 5px 20px black;
        -webkit-box-shadow: 0 5px 20px black;
        transform: scale(1.05); 
        transition: all .2s ease-in-out;
    }

    /* Bootstrap 4 breakpoints & gutter */
    $grid-breakpoints: (
        xs: 0,
        sm: 576px,
        md: 768px,
        lg: 992px,
        xl: 1200px
    ) !default;

    $grid-gutter-width: 30px !default;

    /* number of cards per line for each breakpoint */
    $cards-per-line: (
        xs: 1,
        sm: 2,
        md: 3,
        lg: 2,
        xl: 3,
    );

    @each $name, $breakpoint in $grid-breakpoints {
        @media (min-width: $breakpoint) {
            .card-deck .card {
                flex: 0 0 calc(#{100/map-get($cards-per-line, $name)}% - #{$grid-gutter-width});
            }
        }
    }
</style>